<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .box{
            height:280px;
            width:400px;
            /* border:1px solid grey; */
            box-shadow: 10px 5px 10px 10px grey;
            margin-left: 380px;
            margin-top: 70px;
            padding: 10px;
        }
        .soon{
            display: flex;
        }
        .soon h1{
            margin-left: 370px;
            font-family: cursive;
            word-spacing: 5px;
            color: #e75499;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">
            <div class="soon">
            <img src="t3.png" height="80px" width="100px">
            <h1>STUDENT ADDA</div>
            </div>
        </a>
    </div>
    </nav>
    <form>
        <div class="container">
            <div class="box">
                <h3>FIND YOUR ACCOUNT</h3><hr>
                <p>Please enter your email address to search for your account.</p>
                <input type="text" placeholder="Enter email address" required class="form-control" name="email"><hr>
                <button class="btn btn-secondary">Cancel</button>
                <button class="btn btn-danger">Search</button>
            </div>
        </div>
    </form>  
</body>
</html>
<?php
error_reporting(0);
$email = $_POST['email'];
?>