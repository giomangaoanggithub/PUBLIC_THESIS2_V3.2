$("#logout-btn").click(function () {
  window.location.href = "index.php";
});
$("#account-settings-btn").click(function () {
  window.location.href = "page_account_settings.php";
});

// CHECK IF IMAGE EXISTS
function checkIfImageExists(url, callback) {
  const img = new Image();
  img.src = url;

  if (img.complete) {
    callback(true);
  } else {
    img.onload = () => {
      callback(true);
    };

    img.onerror = () => {
      callback(false);
    };
  }
}

function view_staff(fetch_staff) {
  $.post(
    "zerver_page_admin_view_staff.php",
    {
      staff: fetch_staff,
      script: "1",
    },
    function () {
      window.location.href = "page_admin_view_people.php";
    }
  );
}

function view_students(fetch_student) {
  $.post(
    "zerver_page_admin_view_students.php",
    {
      student: fetch_student,
      script: "0",
    },
    function () {
      window.location.href = "page_admin_view_people.php";
    }
  );
}

function load_questions() {
  $.get("zerver_page_admin_fetch_questions.php", function (data) {
    $("#created-question-list").empty();
    data = JSON.parse(data);
    output = "";
    for (x = 0; x < data.length; x++) {
      output +=
        "<tr><td>" +
        data[x]["question"] +
        "</td><td>" +
        data[x]["owner_teacher"] +
        "</td><td>" +
        data[x]["time_of_issue"] +
        "</td><td>" +
        data[x]["due_date"] +
        "</td><td><button>VIEW</button></td></tr>";
    }
    $("#created-question-list").append(output);
  });
}

function load_picture1(tag_id) {
  $.get("zerver_page_admin_fetch_staff.php", function (data) {
    data = JSON.parse(data);
    for (x = 0; x < document.getElementById("your_staff").rows.length; x++) {
      file_ext = [".jpg", ".png", ".svg", ".webp", ".bmp", ".tif", ".tiff"];
      for (i = 0; i < file_ext.length; i++) {
        checkIfImageExists(
          data[x]["profile_pic_address"] + file_ext[i],
          (exists) => {
            // alert(array[3] + file_ext[i]);
            if (exists) {
              document.getElementById(tag_id + x).innerHTML =
                '<img src="' +
                data[x]["profile_pic_address"] +
                file_ext[i] +
                '" class="img-fluid">';
              i += file_ext.length;
            }
          }
        );
      }
    }
  });
}

function load_picture2(tag_id) {
  $.get("zerver_page_admin_fetch_students.php", function (data) {
    data = JSON.parse(data);
    for (x = 0; x < document.getElementById("your_students").rows.length; x++) {
      file_ext = [".jpg", ".png", ".svg", ".webp", ".bmp", ".tif", ".tiff"];
      for (i = 0; i < file_ext.length; i++) {
        checkIfImageExists(
          data[x]["profile_pic_address"] + file_ext[i],
          (exists) => {
            // alert(array[3] + file_ext[i]);
            if (exists) {
              document.getElementById(tag_id + x).innerHTML =
                '<img src="' +
                data[x]["profile_pic_address"] +
                file_ext[i] +
                '" class="img-fluid">';
              i += file_ext.length;
            }
          }
        );
      }
    }
  });
}

function load_picture3(tag_id) {
  $.get("zerver_page_admin_fetch_applicants.php", function (data) {
    data = JSON.parse(data);
    for (
      x = 0;
      x < document.getElementById("incoming_applicants").rows.length;
      x++
    ) {
      file_ext = [".jpg", ".png", ".svg", ".webp", ".bmp", ".tif", ".tiff"];
      for (i = 0; i < file_ext.length; i++) {
        checkIfImageExists(
          data[x]["profile_pic_address"] + file_ext[i],
          (exists) => {
            // alert(array[3] + file_ext[i]);
            if (exists) {
              document.getElementById(tag_id + x).innerHTML =
                '<img src="' +
                data[x]["profile_pic_address"] +
                file_ext[i] +
                '" class="img-fluid">';
              i += file_ext.length;
            }
          }
        );
      }
    }
  });
}

function load_applicants() {
  $.get("zerver_page_admin_fetch_applicants.php", function (data) {
    $("#incoming_applicants").empty();
    data = JSON.parse(data);
    table_contents = "";
    for (x = 0; x < data.length; x++) {
      table_contents +=
        '<tr><td id="applicantpicture_' +
        x +
        '"><img src="images/profile.png" id="upload-img" class="img-fluid"></td><td>' +
        data[x]["teacher_email"] +
        '</td><td><button id="accept_--' +
        data[x]["a_t_c_id"] +
        '" onClick="accept_or_decline_applicant(this.id)">✔</button><button id="decline_--' +
        data[x]["a_t_c_id"] +
        '" onClick="accept_or_decline_applicant(this.id)">✖</button></td></tr>';
    }
    $("#incoming_applicants").append(table_contents);
    load_picture3("applicantpicture_");
  });
}

function load_staff() {
  $.get("zerver_page_admin_fetch_staff.php", function (data) {
    table_contents = "";
    data = JSON.parse(data);
    $("#your_staff").empty();
    for (x = 0; x < data.length; x++) {
      table_contents +=
        '<tr><td id="staffpicture_' +
        x +
        '"><img src="images/profile.png" id="upload-img" class="img-fluid"></td><td>' +
        data[x]["username"] +
        "</td><td>" +
        data[x]["teacher_email"] +
        "</td><td>" +
        data[x]["contact_number"] +
        "</td><td>" +
        "<button id='staff_" +
        data[x]["a_t_c_id"] +
        "' onclick='view_staff(this.id)'>VIEW</button></td></tr>";
    }
    $("#your_staff").append(table_contents);
    load_picture1("staffpicture_");
  });
}

function load_students() {
  $.get("zerver_page_admin_fetch_students.php", function (data) {
    table_contents = "";
    data = JSON.parse(data);
    $("#your_students").empty();
    for (x = 0; x < data.length; x++) {
      table_contents +=
        '<tr><td id="studentpicture_' +
        x +
        '"><img src="images/profile.png" id="upload-img" class="img-fluid"></td><td>' +
        data[x]["username"] +
        "</td><td>" +
        data[x]["email"] +
        "</td><td>" +
        data[x]["contact_number"] +
        "</td><td>" +
        "<button id='student_"+data[x]["user_id"]+"' onclick='view_students(this.id)'>VIEW</button></td></tr>";
    }
    $("#your_students").append(table_contents);
    load_picture2("studentpicture_");
  });
}

function accept_or_decline_applicant(outcome) {
  $.post(
    "zerver_page_admin_accept_teacher.php",
    { outcome: outcome },
    function () {
      load_applicants();
      load_staff();
    }
  );
}

function page_start() {
  $.get("zerver_greet_user.php", function (data) {
    if (data.length == 11) {
      window.location.href = "index.php";
    } else {
      load_questions();
      load_applicants();
      load_staff();
      load_students();
    }
  });
}

page_start();
