$("#return-btn").click(function () {
  window.location.href = "page_teacher.php";
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

function accept_or_decline(input){
  if(input[0] == "d"){
    $.post(
      "zerver_page_teacher_view_students_a_or_d.php",
      {
        conn_id: input,
        outcome: -1
      },
      function(){
        load_data();
      }
    );
  } else if(input[0] == "a"){
    $.post(
      "zerver_page_teacher_view_students_a_or_d.php",
      {
        conn_id: input,
        outcome: 1
      },
      function(){
        load_data();
      }
    );
  }
}

function load_data() {
  $("#tbody-student-applicants").empty();
  $.get("zerver_page_teacher_view_students_fetch.php", function (data) {
    data = JSON.parse(data);
    table_contents = "";
    for (x = 0; x < data.length; x++) {
      if (data[x]["t_s_connection"] == "0") {
        table_contents +=
          '<tr><td id="studentapp_' +
          data[x]["t_s_conn_id"] +
          '"><img src="images/profile.png" class="img-fluid"></td><td>' +
          data[x]["username"] +
          "</td><td><button id='accept_"+data[x]["t_s_conn_id"]+"' onclick='accept_or_decline(this.id)'>✔</button><button id='decline_"+data[x]["t_s_conn_id"]+"' onclick='accept_or_decline(this.id)'>✖</button></td></tr>";
      }
    }
    $("#tbody-student-applicants").append(table_contents);
    for (x = 0; x < data.length; x++) {
      if (data[x]["t_s_connection"] == "0") {
        file_ext = [".jpg", ".png", ".svg", ".webp", ".bmp", ".tif", ".tiff"];
        for (i = 0; i < file_ext.length; i++) {
          checkIfImageExists(
            data[x]["profile_pic_address"] + file_ext[i],
            (exists) => {
              // alert(array[3] + file_ext[i]);
              if (exists) {
                document.getElementById(
                  "studentapp_" + data[x]["t_s_conn_id"]
                ).innerHTML =
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
    }
  });

  $("#tbody-classroom").empty();
  $.get("zerver_page_teacher_view_students_fetch.php", function (data) {
    data = JSON.parse(data);
    table_contents = "";
    for (x = 0; x < data.length; x++) {
      if (data[x]["t_s_connection"] == "1") {
        table_contents +=
          '<tr><td id="student_' +
          data[x]["t_s_conn_id"] +
          '"><img src="images/profile.png" class="img-fluid"></td><td>' +
          data[x]["username"] +
          "</td><td>" +
          data[x]["email"] +
          "</td><td><button id='viewstudent_" +
          data[x]["t_s_conn_id"] +
          "'>VIEW</button></td></tr>";
      }
    }
    $("#tbody-classroom").append(table_contents);
    for (x = 0; x < data.length; x++) {
      if (data[x]["t_s_connection"] == "1") {
        file_ext = [".jpg", ".png", ".svg", ".webp", ".bmp", ".tif", ".tiff"];
        for (i = 0; i < file_ext.length; i++) {
          checkIfImageExists(
            data[x]["profile_pic_address"] + file_ext[i],
            (exists) => {
              // alert(array[3] + file_ext[i]);
              if (exists) {
                document.getElementById(
                  "student_" + data[x]["t_s_conn_id"]
                ).innerHTML =
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
    }
  });
}

$(window).on("load", load_data());
