<?php
session_start();
session_unset();
session_destroy();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-sign-in-up.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="part1 row">
        <div class="nav-bar col-xl-12 row">
            <div class="nav-bar-left col-xl-6">
                Essay Speed Checker
            </div>
            <div class="nav-bar-right col-xl-6 row">
                <div class="col-xl-6"></div>
                <div class="col-xl-6 row">
                    <div class="col-xl-6"><button id="sign-in-btn" class="btn btn-dark btn-lg">SIGN IN</button></div>
                    <div class="col-xl-6"><button id="sign-up-btn" class="btn btn-dark btn-lg">SIGN UP</button></div>
                </div>
            </div>
        </div>
        <div class="content col-xl-12 row">
            <div class="col-xl-4 row">
                <div class="imgd mh-100 col-xl-12">
                    <img src="images/image-1.gif" class="img-fluid" alt="">
                </div>
                <div class="esc-text col-xl-12">
                    <span class="esc-highlight">ESCAPE</span> ESSAY PAPER<br>WORK HELL
                </div>
            </div>
            <div class="col-xl-4 row">
                <div class="imgd mh-100 col-xl-12">
                    <img src="images/image-2.gif" class="img-fluid" alt="">
                </div>
                <div class="esc-text col-xl-12">
                    <span class="esc-highlight">SWIFTLY</span> FINISH<br>CHECKING ESSAYS
                </div>
            </div>
            <div class="col-xl-4 row">
                <div class="imgd mh-100 col-xl-12">
                    <img src="images/image-3.gif" class="img-fluid" alt="">
                </div>
                <div class="esc-text col-xl-12">
                    <span class="esc-highlight">COMMIT</span> YOUR HOURS TO<br>WHAT MATTERS
                </div>
            </div>
        </div>
    </div>
    <div id="overlay" class="overlay col-xl-12"></div>
    <div id="sign-up-form" class="sign-up-form col-xl-12 row">
        <div class="col-xl-4">
        </div>
        <div class="sign-up-box col-xl-4 row">
            <div class="sign-up-title col-xl-12">
                SIGN UP
            </div>
            <div id="sign-up-content1" class="sign-up-content1 col-xl-12">
                <button id="sel-admin-btn">ADMIN</button>
                <button id="sel-teacher-btn">TEACHER</button>
                <button id="sel-student-btn">STUDENT</button>
            </div>
            <div id="sign-up-s1" class="sign-up-s1 col-xl-12">
                <button id="cancel-btn" class="btn btn-secondary btn-lg">CANCEL</button>
            </div>
            <div id="sign-up-content2" class="sign-up-content2 col-xl-12">
                ADMINISTRATOR<br>
                <input type="text" placeholder="Company Name" id="company-input">
            </div>
            <div id="sign-up-content3" class="sign-up-content3 col-xl-12">
                TEACHER<br>
            </div>
            <div id="sign-up-content4" class="sign-up-content4 col-xl-12">
                STUDENT<br>
            </div>
            <div id="sign-up-content5" class="sign-up-content4 col-xl-12">
                <input type="text" placeholder="email" id="email-input">
                <input type="text" placeholder="username" id="username-input">
                <input type="password" id="password-input" placeholder="password">
                <input type="password" id="cpassword-input" placeholder="confirm password">
                <input type="text" id="contact-number-input" placeholder="contact number ex: 0##########">
                <div class="custom-file col-xl-12">
                    <label for="fileupload">Upload Profile</label>
                    <input type="file" id="fileupload" class="fileToUpload form-control" name="face_image" accept="image/*">
                </div>
                <div class="row">
                    <div class="col-xl-4"></div>
                    <div class="col-xl-4">
                        <div class="profile-images d-flex justify-content-center">
                            <img src="images/profile.png" id="upload-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-4"></div>
                </div>

            </div>
            <div id="sign-up-s2" class="sign-up-s2 col-xl-12">
                <button id="back-btn" class="btn btn-danger btn-lg">BACK</button>
                <button id="proceed-btn" class="btn btn-primary btn-lg">SUBMIT</button>
            </div>
        </div>
        <div class="col-xl-4">

        </div>
    </div>
    <div id="sign-in-form" class="sign-in-form col-xl-12 row">
        <div class="col-xl-4">
        </div>
        <div class="sign-in-box col-xl-4 row">
            <div class="sign-in-title col-xl-12">
                SIGN IN
            </div>
            <div id="sign-in-content" class="sign-in-content col-xl-12">
                <input type="text" placeholder="email" id="login-email-input">
                <input type="password" name="" placeholder="password" id="login-password-input">
            </div>
            <div id="sign-in-s1" class="sign-in-s1 col-xl-12">
                <button id="cancel-login-btn" class="btn btn-danger btn-lg">CANCEL</button>
                <button id="login-btn" class="btn btn-primary btn-lg">LOGIN</button>
            </div>
        </div>
        <div class="col-xl-4">

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="js/jquery-latest.min.js"></script>
    <script>
    $(function() {
        $("#fileupload").change(function(event) {
            var x = URL.createObjectURL(event.target.files[0]);
            $("#upload-img").attr("src", x);
            console.log(event);
        });
    })
    </script>
</body>
<script src="js/script_page_sign-in-up.js"></script>

</html>