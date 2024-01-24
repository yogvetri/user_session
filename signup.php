<!doctype html>
<html lang="en">
<?php
include 'includes/load.php';



$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']





?>

<head>
    <style>
        #form-div {
            width: 350px;
            height: 440px;
            margin-top: 150px;
            /* background-color: aqua; */
        }

        .data1 {
            width: 320px;
        }

        .data2 {
            margin-top: -24px;
            width: 320px;

        }

        .data3 {
            margin-top: -24px;
            width: 320px;
        }

        .btn {
            /* margin-left: 25%; */
            width: 320px;
        }

        .input {
            height: 50px;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid" id="form-div">
        <form action="" method="post">
            <h3>Please singup</h3>
            <div class="data1">
                <label for="username" class="form-label"></label>
                <input type="text" class="input form-control" id="username" placeholder="username">
            </div>
            <div class="data2">

                <label for="email" class="form-label"></label>
                <input type="email" class=" input form-control" placeholder="example@gmail.com">
            </div>
            <div class="data3">

                <label for="password" class="form-label"></label>
                <input type="password" class="input form-control" placeholder="password">
            </div>
            <button class="btn btn-primary mt-3" type="submit">signup</button>
    </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>