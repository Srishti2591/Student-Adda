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
            height:460px;
            width:300px;
            /* border:1px solid grey; */
            box-shadow: 10px 5px 10px 10px grey;
            margin-left: 380px;
            margin-top: 50px;
            padding: 10px;
        }
        h3{
            /* color:red; */
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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
    <form action="" name="myform" onsubmit="welcome()" method="POST">
        <div class="container">
            <div class="box">
                <h3>Registration Form</h3><hr>
                <div class="mb-3"><input type="text" name="name" required id="name" placeholder="Full Name" class="form-control"></div>
                <div class="mb-3"><input type="text" name="address" required id="address" placeholder="Add country,city or landmark" class="form-control"></div>
                <div class="mb-3"><input type="number" name="number" required id="number" placeholder="mobile number" class="form-control"></div>
                <div class="mb-3"><input type="email" name="email" required id="email" placeholder="Email address" class="form-control"></div>
                <div class="mb-3"><input type="password" name="password" required id="password" placeholder="password" class="form-control"></div>
                <div class="mb-3"><input type="password" name="cpassword" required id="cpassword" placeholder="confirm password" class="form-control"></div>
                <div class="mb-3"><button class="btn btn-danger form-control" type="submit" value="submit" name="submit">Register</button></div>
            </div>
        </div>
    </form>
</body>
</html>
<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','projDB');
if(isset($_POST['submit'])){
    $username=$_POST['name'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $password11=password_hash($password , PASSWORD_BCRYPT);
    $cpassword12=password_hash($cpassword , PASSWORD_BCRYPT);
    if($password === $cpassword){
        if($username != "" && $address !="" && $number !="" && $email !="" && $password11 !="" && $cpassword12 !=""){
            $iquery="insert into `projregister`(`name`,`address`,`contact`,`email`,`password`,`cpassword`) values('$username','$address','$number','$email','$password11','$cpassword12')";
            $run = mysqli_query($conn,$iquery);
        if($run){
            // echo "data inserted successfully" ;
        }else{
          echo "failed" ;
        }
        }
        else{
          echo "<script>alert('please fill the form');</script>";
        }
        }
        else{
            echo "<script>alert('password must be same');</script>"; 
        }
}
?>