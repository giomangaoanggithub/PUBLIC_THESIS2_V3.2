<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_account_settings.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="account-title col-xl-12">
            <h1>ACCOUNT SETTINGS</h1>
        </div>
        <div class="account-settings col-xl-12 row">
            <div class="col-xl-3"></div>
            <div class="account-settings-content col-xl-6">
                <table>
                    <tr>
                        <td>
                            <img src="images/profile.png" id="upload-img" class="img-fluid">
                        </td>
                        <td>
                            <label for="fileupload">UPDATE PROFILE:</label>
                            <input type="file" id="fileupload" class="fileToUpload form-control" name="face_image" accept="image/*">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="username" placeholder="John Doe">
                        </td>
                        <td>
                            <button id="username_btn">CHANGE USERNAME</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="company" placeholder="COMPANY NAME*">
                        </td>
                        <td>
                            <button id="company_btn">CHANGE COMPANY NAME</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" id="company_password" value="stored_value">
                        </td>
                        <td>
                            <button id="company_password_btn">CHANGE COMPANY CODE</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="number" placeholder="09608663386">
                        </td>
                        <td>
                            <button id="number_btn">UPDATE MOBILE NUMBER</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="email" placeholder="johndoe@gmail.com">
                        </td>
                        <td>
                            <button id="email_btn">UPDATE EMAIL</button>
                        </td>

                    </tr>
                </table>
            </div>
            <div class="col-xl-3"></div>
        </div>
        <div class="cancel-area col-xl-12">
            <button id="cancel-btn">CANCEL</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/jquery-latest.min.js"></script>
</body>
<script src="js/script_page_account_settings.js"></script>

</html>