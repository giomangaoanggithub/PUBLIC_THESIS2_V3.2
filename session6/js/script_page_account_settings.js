function page_start() {
  $.get("zerver_page_account_settings_fetch_admin.php", function (data) {
    if(data == '["", "", ""]'){
      document.getElementById("company").style.display = "none";
      document.getElementById("company_password").style.display ="none";
      document.getElementById("company_btn").style.display = "none";
      document.getElementById("company_password_btn").style.display ="none";
    }
    array = JSON.parse(data);
    document.getElementById("company").value = array[1];
    document.getElementById("company_password").value = array[2];
  });
  $.get("zerver_greet_user.php", function (data) {
    if (data.length == 11) {
      window.location.href = "index.php";
    } else {
      $.get("zerver_page_account_settings_fetch_all.php", function (data) {
        array = JSON.parse(data);
        document.getElementById("email").placeholder = array[0];
        document.getElementById("number").placeholder = array[2];
        document.getElementById("company").placeholder = "none yet";
        document.getElementById("username").placeholder = array[1];

        file_ext = [".jpg", ".png", ".svg", ".webp", ".bmp", ".tif", ".tiff"];
        for (i = 0; i < file_ext.length; i++) {
          checkIfImageExists(array[3] + file_ext[i], (exists) => {
            // alert(array[3] + file_ext[i]);
            if (exists) {
              document.getElementById("upload-img").src =
                array[3] + file_ext[i];
              i += file_ext.length;
            }
          });
        }
      });
    }
  });
}

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

//BUTTON CLICKS AND CHANGES
$("#fileupload").change(function () {
  var x = URL.createObjectURL(event.target.files[0]);
  $("#upload-img").attr("src", x);
  console.log(event);
  var file_data = $(".fileToUpload").prop("files")[0]; //Fetch the file
  var form_data = new FormData();
  // alert(file_data);
  form_data.append("file", file_data);
  form_data.append("interaction", 0);
  //Ajax to send file to upload
  $.ajax({
    url: "zerver_page_account_settings_update.php", //Server api to receive the file
    type: "POST",
    dataType: "script",
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    success: function () {
      alert("UPDATING PROFILE PICTURE...");
    },
  });
});

$("#username_btn").click(function () {
  $.post(
    "zerver_page_account_settings_update.php",
    { number: 1, interaction: document.getElementById("username").value },
    function () {
      alert("USERNAME UPDATED");
      document.getElementById("username").placeholder =
        document.getElementById("username").value;
      document.getElementById("username").value = "";
    }
  );
});
$("#company_btn").click(function () {
  $.post(
    "zerver_page_account_settings_update.php",
    { number: 2, interaction: document.getElementById("company").value },
    function () {
      alert("COMPANY NAME UPDATED");
      document.getElementById("company").placeholder =
        document.getElementById("company").value;
      document.getElementById("company").value = "";
    }
  );
});
$("#company_password_btn").click(function () {
  $.post(
    "zerver_page_account_settings_update.php",
    {
      number: 3,
      interaction: document.getElementById("company_password").value,
    },
    function () {
      alert("COMPANY PASSWORD UPDATED");
      document.getElementById("company_password").placeholder =
        document.getElementById("company_password").value;
      document.getElementById("company_password").value = "";
    }
  );
});
$("#number_btn").click(function () {
  $.post(
    "zerver_page_account_settings_update.php",
    {
      number: 4,
      interaction: document.getElementById("number").value,
    },
    function () {
      alert("CONTACT NUMBER UPDATED");
      document.getElementById("number").placeholder =
        document.getElementById("number").value;
      document.getElementById("number").value = "";
    }
  );
});
$("#email_btn").click(function () {
  
  $.post(
    "zerver_page_sign-in-up_fetch-email.php",
    {
      email: document.getElementById("email").value,
    },
    function (data, status) {
      // alert("Data: " + data + "\nStatus: " + status);
      if (JSON.parse(data)[0] == document.getElementById("email").value) {
        alert(
          "Apologies, you have inserted an existing email in this website."
        );
        return;
      } else if (data == '[""]' && status == "success") {
        $.post(
          "zerver_page_account_settings_update.php",
          { number: 5, interaction: document.getElementById("email").value },
          function () {
            alert("EMAIL ADDRESS UPDATED");
            document.getElementById("email").placeholder =
              document.getElementById("email").value;
            document.getElementById("email").value = "";
          }
        );
      }
    }
  );
});

$("#cancel-btn").click(function () {
  $.get("zerver_page_return.php", function (data) {
    if (data == '["2"]') {
      window.location.href = "page_admin.php";
    } else if (data == '["1"]') {
      window.location.href = "page_teacher.php";
    } else {
      window.location.href = "page_student.php";
    }
  });
});

$("#company_password").click(function () {
  document.getElementById("company_password").type = "text";
});

page_start();
