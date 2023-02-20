<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_teacher_view_students.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="listof-students col-xl-8">
            <table>
                <thead>
                    <tr>
                        <th style="width: 8%;">
                            Profile Picture
                        </th>
                        <th style="width: 42%;">
                            Name
                        </th>
                        <th style="width: 42%;">
                            Email
                        </th>
                        <th style="width: 8%;">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody-classroom">
                    <tr>
                        <td>
                            pic*
                        </td>
                        <td>
                            John Doe
                        </td>
                        <td>
                            johndoe@email.com
                        </td>
                        <td>
                            <button>VIEW</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="student-applicants col-xl-4">
            <table>
                <thead>
                    <tr>
                        <th style="width: 15%;">
                            ☻
                        </th>
                        <th>
                            Applicant
                        </th>
                        <th style="width: 20%;">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="tbody-student-applicants">
                    <tr>
                        <td>
                            pic*
                        </td>
                        <td>
                            Johny Stud
                        </td>
                        <td>
                            <button>✔</button>
                            <button>✖</button>
                        </td>
                    </tr>          
                </tbody>
            </table>
        </div>
        <div class="show-student-face col-xl-2">
            <img src="images/profile.png" alt="" class="img-fluid">
        </div>
        <div class="show-student-details col-xl-8">
            <span id="name_span">Name: John Chosen</span><br>
            <span id="email_span">Email: johnchosen@email.com</span><br>
            <span id="contact_span">Contact Number: 09608663386</span><br>
            <table>
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Essay Answer</th>
                        <th>Grade</th>
                        <th>HPS</th>
                    </tr>
                </thead>
                <tbody id="main_view">
                    <tr>
                        <td>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tempora nulla rem, repudiandae quia magnam minus porro molestias molestiae provident cupiditate dignissimos omnis nemo cumque libero nesciunt ex facere autem?
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo pariatur cupiditate voluptates iste? Dolores aspernatur ad tempore alias expedita, quam necessitatibus et similique. Quos, enim laudantium nesciunt vel nostrum vitae!
                        </td>
                        <td>
                            65%
                        </td>
                        <td>
                            45
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus tempora nulla rem, repudiandae quia magnam minus porro molestias molestiae provident cupiditate dignissimos omnis nemo cumque libero nesciunt ex facere autem?
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo pariatur cupiditate voluptates iste? Dolores aspernatur ad tempore alias expedita, quam necessitatibus et similique. Quos, enim laudantium nesciunt vel nostrum vitae!
                        </td>
                        <td>
                            65%
                        </td>
                        <td>
                            45
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
        </div>
        <div class="some-buttons col-xl-2">
            <button id="return-btn">RETURN</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_teacher_view_students.js"></script>

</html>