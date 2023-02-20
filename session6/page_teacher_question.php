<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="styles/style-page_teacher_question.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="created-question-section col-xl-8">
            <table>
                <thead>
                    <tr>
                        <th style="width: 80%;">
                            YOUR CREATED QUESTIONS
                        </th>
                        <th>
                            ACTION
                        </th>
                    </tr>
                </thead>
                <tbody id="created-q">
                    <tr>
                        <td>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt temporibus accusantium
                            sint perspiciatis earum fugit dolore, tempora itaque repudiandae eaque assumenda! Labore
                            aliquam minus eos provident quam doloribus necessitatibus commodi.
                        </td>
                        <td>
                            <button class="gear-btn">⚙️</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="col-xl-2"></div>
    </div>
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="create-question-input col-xl-8 row">
            <div class="create-question-input-textarea col-xl-10">
                <textarea name="" id="input-create" cols="50" rows="3" placeholder="Write your question here..."></textarea>
                <textarea name="" id="autocheck-textarea" cols="50" rows="3" placeholder="Write your expected answer here... (optional)"></textarea>
            </div>
            <div class="create-question-input-interactives col-xl-2">
                <button id="update-btn">UPDATE</button>
                <button id="create-q-btn">CREATE</button>
                <button id="autocheck-btn">AUTO CHECK</button>
                <button id="return_page_teacher">BACK</button>
            </div>
        </div>
        <div class="col-xl-2"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="js/script_page_teacher_question.js"></script>

</html>