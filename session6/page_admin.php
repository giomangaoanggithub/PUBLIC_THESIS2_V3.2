<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=5%">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_admin.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="admin-content row">
        <div class="table_placement col-xl-8">
            <div>
                <table class="table-content" style="width: 100%">
                    <thead>
                        <tr>
                            <h3>CREATED QUESTIONS</h3>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="scrollable-tables">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td>
                                <table class="table-content">
                                    <thead>
                                        <tr>
                                            <th width="50%">
                                                QUESTIONS
                                            </th>
                                            <th width="20%">
                                                TEACHER
                                            </th>
                                            <th>
                                                T.O.I.
                                            </th>
                                            <th>
                                                Due Date
                                            </th>
                                            <th>
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="created-question-list">

                                        <tr>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem soluta
                                                quo voluptatibus exercitationem error. Cumque, architecto esse ex soluta
                                                molestias illo aperiam doloremque aut quo officiis labore corrupti
                                                explicabo aliquid?
                                            </td>
                                            <td>
                                                owner name teacher
                                            </td>
                                            <td>
                                                time1
                                            </td>
                                            <td>
                                                time2
                                            </td>
                                            <td>
                                                <button style="width: 100%">VIEW</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="table-content" style="width: 100%">
                    <thead>
                        <tr>
                            <h3>STAFF</h3>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="scrollable-tables">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td>
                                <table class="table-content">
                                    <thead>
                                        <tr>
                                            <th style="width: 8%;">
                                                PROFILE
                                            </th>
                                            <th>
                                                NAME
                                            </th>
                                            <th>
                                                EMAIL
                                            </th>
                                            <th>
                                                MOBILE NUMBER
                                            </th>
                                            <th>
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="your_staff">
                                        <tr>
                                            <td>
                                                pic*
                                            </td>
                                            <td>
                                                John Doe
                                            </td>
                                            <td>
                                                john@gmail.com
                                            </td>
                                            <td>
                                                09608663386
                                            </td>
                                            <td>
                                                <button>VIEW</button>
                                            </td>
                                        </tr>





                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <table class="table-content" style="width: 100%">
                    <thead>
                        <tr>
                            <h3>STUDENTS</h3>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="scrollable-tables">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td>
                                <table class="table-content">
                                    <thead>
                                        <tr>
                                            <th style="width: 8%;">
                                                PROFILE
                                            </th>
                                            <th>
                                                NAME
                                            </th>
                                            <th>
                                                EMAIL
                                            </th>
                                            <th>
                                                MOBILE NUMBER
                                            </th>
                                            <th>
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="your_students">
                                        <tr>
                                            <td>
                                                pic*
                                            </td>
                                            <td>
                                                John Doe
                                            </td>
                                            <td>
                                                john@gmail.com
                                            </td>
                                            <td>
                                                09608663386
                                            </td>
                                            <td>
                                                <button>VIEW</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="right-btns col-xl-4">
            <div class="row">
                <div class="col-xl-4"></div>
                <div class="col-xl-4">
                    <img src="images/logo-placement.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-xl-4"></div>
            </div>
            <div id="connect-request">
                <table>
                    <thead>
                        <tr>
                            <th>
                                STAFF REQUEST
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div id="scrollable-conn-req">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="font-size: 200%; width: 15%;">
                                                    ☻
                                                </th>
                                                <th>
                                                    EMAIL
                                                </th>
                                                <th style="width: 40%;">
                                                    ACTION
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="incoming_applicants">
                                            <tr>
                                                <td>
                                                    pic*
                                                </td>
                                                <td>
                                                    email
                                                </td>
                                                <td>
                                                    <button>✔</button>
                                                    <button>✖</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button id="account-settings-btn">ACCOUNT SETTINGS</button>
                <button id="logout-btn">LOGOUT</button>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_admin.js" async></script>

</html>