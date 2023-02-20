// page_teacher.php

$("#account_settings").click(function () {
  window.location.href = "page_account_settings.php";
});

$("#create-questions").click(function () {
  window.location.href = "page_teacher_question.php";
});

$("#classroom-students").click(function () {
  window.location.href = "page_teacher_view_students.php";
});

$("#create-room-btn").click(function () {
  $.post(
    "zerver_page_create_change_room_param.php",
    {
      outcome: 0,
    },
    function () {
      window.location.href = "page_create_change_room.php";
    }
  );
});

$("#change-room-btn").click(function () {
  $.post(
    "zerver_page_create_change_room_param.php",
    {
      outcome: 1,
    },
    function () {
      window.location.href = "page_create_change_room.php";
    }
  );
});

$("#logout-btn").click(function () {
  window.location.href = "index.php";
});

enable_mouseover = 0;
sentence_focuser = "";

function highlight_sentences(input1, input2) {
  if (
    enable_mouseover == 0 &&
    document.getElementsByClassName(input2)[input1].style.backgroundColor !=
      "rgb(255, 255, 0)"
  ) {
    document.getElementsByClassName(input2)[input1].style.backgroundColor =
      "#f0f095";
  } else if (enable_mouseover == 1) {
    document.getElementsByClassName(sentence_focuser)[
      input1
    ].style.backgroundColor = "#FFFF00";
  } else if (
    document.getElementsByClassName(input2)[input1].style.backgroundColor ==
    "rgb(255, 255, 0)"
  ) {
    document.getElementsByClassName(input2)[input1].style.backgroundColor =
      "#bfb184";
  }
}

function unhighlight_sentences(input1, input2) {
  // alert(document.getElementsByClassName(input2)[input1].style.backgroundColor);
  if (
    enable_mouseover == 0 &&
    document.getElementsByClassName(input2)[input1].style.backgroundColor !=
      "rgb(191, 177, 132)" &&
    document.getElementsByClassName(input2)[input1].style.backgroundColor !=
      "rgb(255, 255, 0)"
  ) {
    document.getElementsByClassName(input2)[input1].style.backgroundColor =
      "transparent";
  } else if (
    enable_mouseover == 0 &&
    document.getElementsByClassName(input2)[input1].style.backgroundColor ==
      "rgb(191, 177, 132)"
  ) {
    document.getElementsByClassName(input2)[input1].style.backgroundColor =
      "#FFFF00";
  }
}

function enable_highlight(input1, input2) {
  if (
    document.getElementsByClassName(input2)[input1].style.backgroundColor ==
      "rgb(191, 177, 132)" &&
    enable_mouseover == 0
  ) {
    document.getElementsByClassName(input2)[input1].style.backgroundColor =
      "transparent";
    enable_mouseover = 0;
    return;
  }
  document.getElementsByClassName(input2)[input1].style.backgroundColor =
    "#FFFF00";
  if (enable_mouseover == 0) {
    enable_mouseover++;
    sentence_focuser = input2;
  } else {
    enable_mouseover--;
  }
}

function undo_all(input1) {
  input1 = input1.replace("undo_id_", "");
  for (
    x = 0;
    x < document.getElementsByClassName("answer_id_" + input1).length;
    x++
  ) {
    document.getElementsByClassName("answer_id_" + input1)[
      x
    ].style.backgroundColor = "transparent";
  }
}

function done_check(input){
  input = input.replace("done_check_", "");
  arr_context = [];
  arr_type = [];
  hold_arr = [];
  y = 0;
  z = 0;
  
  for(x = 1; x < document.getElementsByClassName("answer_id_" + input).length; x++){    
    if(document.getElementsByClassName("answer_id_" + input)[x - 1].style.backgroundColor == document.getElementsByClassName("answer_id_" + input)[x].style.backgroundColor){
      hold_arr[(x - 1) - z] = document.getElementsByClassName("answer_id_" + input)[x - 1].innerHTML;
    } else {
      hold_arr[(x - 1) - z] = document.getElementsByClassName("answer_id_" + input)[x - 1].innerHTML;
      arr_context[y] = hold_arr;
      if(document.getElementsByClassName("answer_id_" + input)[x - 1].style.backgroundColor == "transparent"){
        arr_type[y] = "[CORRECT]";
      } else {arr_type[y] = "[INCORRECT]";}
      y++;
      hold_arr = []
      z = x;
    }
    if(x == document.getElementsByClassName("answer_id_" + input).length - 1){
      if(document.getElementsByClassName("answer_id_" + input)[x - 1].style.backgroundColor == document.getElementsByClassName("answer_id_" + input)[x].style.backgroundColor && document.getElementsByClassName("answer_id_" + input)[x].style.backgroundColor == "transparent"){
        arr_type[y] = "[CORRECT]";
        hold_arr[(x - 1) - z] = document.getElementsByClassName("answer_id_" + input)[x - 1].innerHTML;
        hold_arr[(x) - z] = document.getElementsByClassName("answer_id_" + input)[x].innerHTML;
        arr_context[y] = hold_arr;
      } else if(document.getElementsByClassName("answer_id_" + input)[x - 1].style.backgroundColor == document.getElementsByClassName("answer_id_" + input)[x].style.backgroundColor && document.getElementsByClassName("answer_id_" + input)[x].style.backgroundColor != "transparent"){
        arr_type[y] = "[INCORRECT]";
        hold_arr[(x - 1) - z] = document.getElementsByClassName("answer_id_" + input)[x - 1].innerHTML;
        hold_arr[(x) - z] = document.getElementsByClassName("answer_id_" + input)[x].innerHTML;
        arr_context[y] = hold_arr;
      } else {
        if(document.getElementsByClassName("answer_id_" + input)[x].style.backgroundColor == "transparent"){
          arr_type[y] = "[CORRECT]"
          hold_arr[(x)- z] = document.getElementsByClassName("answer_id_" + input)[x].innerHTML;
          arr_context[y] = hold_arr;
        } else {
          arr_type[y] = "[INCORRECT]";
          hold_arr[(x) - z] = document.getElementsByClassName("answer_id_" + input)[x].innerHTML;
          arr_context[y] = hold_arr;
        }
      }
      
      
    }
  }

  output = "";

  for(x = 0; x < arr_context.length; x++){
    output += arr_context[x] + " -|- " + arr_type[x] + "\n";
  }

  alert(output);
}

function page_start() {
  $.get("zerver_in_no_company.php", function (data) {
    if (data == "0") {
      window.location.href = "page_teacher_company.php";
    } else {
      $.get("zerver_page_teacher_room_change_show.php", function (data) {
        which_room = data;
        if (which_room == "") {
          return;
        }
        $.get("zerver_page_create_change_room_fetch.php", function (data) {
          data = JSON.parse(data);
          for (x = 0; x < data.length; x++) {
            if (data[x]["room_id"] == which_room) {
              which_room = data[x]["room_name"];
            }
          }
          document.getElementById("curr_class_section").innerHTML = which_room;
          $.get("zerver_page_teacher_fetch_unchecked.php", function (data) {
            // alert(data);
            data = JSON.parse(data);
            unique_questions = [];
            for (x = 0; x < data.length; x++) {
              unique_questions[x] = data[x]["question_id"];
            }
            unique = (value, index, self) => {
              return self.indexOf(value) === index;
            };
            unique_questions = unique_questions.filter(unique);
            output1 = []; //set of questions
            output2 = []; //set of answers to those questions
            output3 = []; //answer_id_assigned
            for (x = 0; x < data.length; x++) {
              output3[x] = data[x]["answer_id"];
            }
            for (x = 0; x < unique_questions.length; x++) {
              for (y = 0; y < data.length; y++) {
                if (data[y]["question_id"] == unique_questions[x]) {
                  output1[x] = data[y]["question"];
                }
              }
            }
            for (x = 0; x < unique_questions.length; x++) {
              hold_arr1 = [];
              hold_arr2 = [];
              z = 0;
              for (y = 0; y < data.length; y++) {
                if (data[y]["question_id"] == unique_questions[x]) {
                  hold_arr1[z] = data[y]["answer"];
                  hold_arr2[z] = data[y]["answer_id"];
                  z++;
                }
              }
              output2[x] = hold_arr1;
              output3[x] = hold_arr2;
            }
            html_insertion = ``;
            for (x = 0; x < output1.length; x++) {
              //assign the questions and answers in html form.
              html_insertion +=
                `<div class="height-limiter" style="min-height: 40vh;"><h5>` +
                output1[x] +
                `</h5><table style="width: 100%;"><thead><tr><th style="width: 90%;">STATEMENTS</th><th style="width: 10%;">ACTION</th></tr></thead><tbody>`;
              for (y = 0; y < output2[x].length; y++) {
                spanner_arr = output2[x][y].split(" ");
                spanned_str = "";
                for (z = 0; z < spanner_arr.length; z++) {
                  spanner_arr[z] =
                    '<span id="' +
                    z +
                    '" class="answer_id_' +
                    output3[x][y] +
                    '" onmouseover="highlight_sentences(this.id, this.className)" onclick="enable_highlight(this.id, this.className)" onmouseout="unhighlight_sentences(this.id, this.className)" style="background-color: transparent;">' +
                    spanner_arr[z] +
                    " </span>";
                  spanned_str += spanner_arr[z];
                }
                html_insertion +=
                  `<tr><td>` +
                  spanned_str +
                  `</td><td><button id="undo_id_` +
                  output3[x][y] +
                  `" onclick="undo_all(this.id)">⌫</button><button id="done_check_` + output3[x][y] + `" onclick="done_check(this.id)">✔</button></td></tr>`;
              }
              html_insertion += `</tbody></table></div>`;
            }
            document.getElementById("check-area").innerHTML = html_insertion;
            // alert(document.getElementsByClassName("answer_id_3").length)
          });
        });
      });
    }
  });
}
page_start();
