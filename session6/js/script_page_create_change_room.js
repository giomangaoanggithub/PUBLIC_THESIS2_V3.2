$("#return_page_teacher").click(function () {
  window.location.href = "page_teacher.php";
});

$("#show-create").click(function(){
  document.getElementById("insert-room-name").style.display = "inline";
  document.getElementById("insert-room-code").style.display = "inline";
  document.getElementById("insert-room-btn").style.display = "inline";
});

$("#show-delete").click(function(){
  document.getElementById("delete-room-name").style.display = "inline";
  document.getElementById("delete-room-code").style.display = "inline";
  document.getElementById("delete-room-btn").style.display = "inline";
});

$("#insert-room-btn").click(function(){
  if(document.getElementById("insert-room-name").value == ""){return}
  if(document.getElementById("insert-room-code").value == ""){return}
  $.post(
    "zerver_page_create_change_room_create.php",
    {
      room_name: document.getElementById("insert-room-name").value,
      room_code: document.getElementById("insert-room-code").value
    },
    function(data){
      alert(data);
    }
  );
});

function room_change(room_id){
  $.post(
    "zerver_page_teacher_room_change.php",
    {
      room_number: room_id
    },
    function(){
      window.location.href = "page_teacher.php";
    }
  );
}

function page_start() {
  $.get("zerver_page_create_change_room_param.php", function (data) {
    if (data == 0) {
      document.getElementsByClassName("change-room-title")[0].style.display = "none";
      document.getElementsByClassName("change-room-param")[0].style.display = "none";
      $.get(
        "zerver_page_create_change_room_fetch.php",
        function(data){
          $("#show-created-rooms").empty();
          data = JSON.parse(data);
          created_rooms = "";
          for(i = 0; i < data.length; i++){
            created_rooms = created_rooms + '<tr><td>'+data[i]["room_name"] + '</td><td>' + data[i]["room_code"] + '</td><td><button>⚙️</button></td></tr>';
          }
          $("#show-created-rooms").append(created_rooms);
        }
      );
      

    } else if (data == 1) {
      document.getElementsByClassName("create-room-title")[0].style.display = "none";
      document.getElementsByClassName("create-room-list")[0].style.display = "none";
      document.getElementsByClassName("create-room-interactions")[0].style.display = "none";
      $.get(
        "zerver_page_create_change_room_fetch.php",
        function(data){
          $("#show-change-rooms").empty();
          data = JSON.parse(data);
          change_rooms = "";
          for(i = 0; i < data.length; i++){
            change_rooms = change_rooms + '<tr><td>'+data[i]["room_name"] + '</td><td>' + data[i]["room_code"] + '</td><td><button id="' + data[i]["room_id"] + '" onclick="room_change(this.id)">ENTER</button></td></tr>';
          }
          $("#show-change-rooms").append(change_rooms);
        }
      );
    }
  });
}

page_start();
