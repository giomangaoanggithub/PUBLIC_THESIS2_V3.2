<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_create_change_room.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="create-change-room row">

        <div class="create-room-title col-xl-12">
            <h1>
                CREATE CLASSROOM
            </h1>
        </div>
        <div class="create-room-list col-xl-10">
            <table>
                <thead>
                    <tr>
                        <th>
                            Room Name
                        </th>
                        <th>
                            Room Code
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="show-created-rooms">
                    <tr>
                        <td>
                            SCIENCE ROOM
                        </td>
                        <td>
                            room code yada yada*
                        </td>
                        <td>
                            <button>ENTER</button>
                            <button>⚙️</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="create-room-interactions col-xl-2">
            <button id="show-create">CREATE</button>
            <button id="show-delete">DELETE</button>
            <button id="return_page_teacher">BACK</button>
        </div>
        <div class="create-interaction col-xl-5">
            <input type="text" placeholder="Insert Room Name..." id="insert-room-name">
            <input type="text" placeholder="Insert Room Code..." id="insert-room-code">
        </div>
        <div class="create-interaction col-xl-1">
            <button id="insert-room-btn">GENERATE</button>
        </div>
        <div class="delete-interaction col-xl-5">
            <input type="text" placeholder="Insert Room Name, just to be sure..." id="delete-room-name">
            <input type="text" placeholder="Insert Room Code, just to be certain..." id="delete-room-code">
        </div>
        <div class="delete-interaction col-xl-1">
            <button id="delete-room-btn">DESTROY</button>
        </div>

        <div class="change-room-title col-xl-12">
            <h1>
                CHANGE CLASSROOM
            </h1>
        </div>
        <div class="change-room-param col-xl-12 row">
            <div class="col-xl-2"></div>
            <div class="change-room-content col-xl-8">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Room Name
                            </th>
                            <th>
                                Room Code
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="show-change-rooms">
                        <tr>
                            <td>
                                SCIENCE ROOM
                            </td>
                            <td>
                                room code yada yada*
                            </td>
                            <td>
                                <button>ENTER</button>
                                <button>⚙️</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xl-2"></div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_create_change_room.js"></script>

</html>