$("#back-btn").click(function () {
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

function page_start() {
  $.get("zerver_page_admin_view_session.php", function (data) {
    alert(data);
    data = data.split(", ");
    document.getElementById("username").innerHTML = data[1];
    document.getElementById("email").innerHTML = data[2];
    document.getElementById("contact").innerHTML = data[3];
    if (data[4] == "1") {
      $.get("zerver_page_admin_view_staff_work.php", function (data) {
        data = JSON.parse(data);
        $("#tbody-second-table").empty();
        for (x = 0; x < data.length; x++) {
          if (data[x]["publish"] == "0") {
            data[x]["publish"] = "FORTHCOMING";
          } else {
            data[x]["publish"] = "PUBLISH";
          }
        }
        output = "";
        for (x = 0; x < data.length; x++) {
          output =
            output +
            "<tr><td>" +
            data[x]["question"] +
            "</td><td>" +
            data[x]["publish"] +
            "</td><td>" +
            data[x]["time_of_issue"] +
            "</td><td>" +
            data[x]["due_date"] +
            "</td></tr>";
        }
        $("#tbody-second-table").append(output);
      });
    } else {
      $.get("zerver_page_admin_view_student_work.php", function (data) {
        data = JSON.parse(data);
        $("#tbody-second-table").empty();
        output = "";
        for (x = 0; x < data.length; x++) {
          output =
            output +
            "<tr><td>" +
            data[x]["answer"] +
            "</td><td>" +
            data[x]["time_of_submission"] +
            "</td><td>" +
            data[x]["due_date"] +
            "</td><td>" +
            data[x]["grades"] +
            "</td></tr>";
        }
        $("#tbody-second-table").append(output);
      });
    }
  });
}
page_start();
