$("#in-company").click(function () {
  input1 = document.getElementById("company_name").value;
  input2 = document.getElementById("company_code").value;
  $.post(
    "zerver_page_teacher_company.php",
    { company: input1, code: input2 },
    function (data) {
      array = JSON.parse(data);
      if (array[0] == input1 && array[1] == input2) {
        $.post(
          "zerver_admin_teacher_conn.php",
          {
            admin_email: array[2],
          },
          function () {
            document.getElementById("queue_mode").style.visibility = "visible";
            document.getElementById("step1").style.visibility = "collapse";
            document.getElementById("step2").style.visibility = "collapse";
            document.getElementById("step3").style.visibility = "collapse";
            document.getElementById("step4").style.visibility = "collapse";
            document.getElementById("step5").style.visibility = "collapse";
          }
        );
      }
    }
  );
});
$("#no-company").click(function () {
  window.location.href = "index.php";
});

function page_start() {
  $.get("zerver_teacher_on_queue.php", function (data) {
    if (data.length == 4) {
      document.getElementById("queue_mode").style.visibility = "collapse";
    } else {
      document.getElementById("step1").style.visibility = "collapse";
      document.getElementById("step2").style.visibility = "collapse";
      document.getElementById("step3").style.visibility = "collapse";
      document.getElementById("step4").style.visibility = "collapse";
      document.getElementById("step5").style.visibility = "collapse";
    }
  });
}

page_start();
