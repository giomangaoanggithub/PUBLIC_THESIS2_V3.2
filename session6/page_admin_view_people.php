<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=5%">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_admin_view_people.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-xl-3">
            <img src="images/profile.png" alt="" class="img-fluid">
        </div>
        <div class="user_details col-xl-7">
            <h1>BACKGROUND</h1>
            <div>
                <table id="output_user_details">
                    <thead>
                        <tr>
                            <th style="width: 10%;">CATEGORY</th>
                            <th>INFORMATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NAME</td>
                            <td id="username">John Doe</td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td id="email">johndoe@email.com</td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td id="contact">09608663386</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="second-table">
                <table>
                    <thead>
                        <tr>
                            <th>WRITINGS</th>
                            <th style="width: 15%;">STATUS</th>
                            <th style="width: 15%;">TIME OF ISSUE</th>
                            <th style="width: 15%;">DUE DATE</th>
                        </tr>
                    </thead>
                    <tbody id="tbody-second-table">
                        <tr>
                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut laboriosam ea quis mollitia
                                quia recusandae, corrupti accusamus veniam hic esse ab dolor quod repellat quo? Culpa
                                suscipit sapiente commodi maiores?</td>
                            
                            <td>PUBLISHED/ONTIME/LATE</td>
                            <td>0000</td>
                            <td>0000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="some_buttons col-xl-2">
            <button id="back-btn">BACK</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_admin_view_people.js" async></script>
</html>