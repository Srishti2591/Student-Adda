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
            height:400px;
            width:300px;
            /* border:1px solid grey; */
            box-shadow: 10px 5px 10px 10px grey;
            margin-left: 380px;
            margin-top: 50px;
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
        #hello{
            text-decoration: none;
            color: white;
            font-style: oblique;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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
    <form method="post">
        <div class="container">
            <div class="box">
                <h3>Sign in</h3><hr>
                <p>Stay updated on your professional world</p>
                <div class="mb-3"><input type="text" name="email" placeholder="Enter Email Id" class="form-control"></div>
                <div class="mb-3"><input type="password" name="password" placeholder="Enter Password" class="form-control"></div>
                <div class="mb-3"><a href="forget.php" class="m-3" data-toggle="modal" data-target="#myModal">Forget Password?</a></div>
                <div class="mb-3"><button class="btn btn-danger form-control" type="submit" value="sign" name="sign">Sign in</button></div>
                <div class="mb-3"><button class="btn btn-success form-control"><a href="registerl.php" id="hello">Create An Account</a></button></div>
            </div>
        </div>
    </form> 
</body>
</html>
<?php 
error_reporting(0);
$conn = mysqli_connect('localhost','root','','projDB');
if(isset($_POST['sign'])){
  $email12=$_POST['email'];
  $password45=$_POST['password'];
  $query = "SELECT * FROM `projregister` WHERE email = '$email12' and password = '$password45'";
  $result = mysqli_query($conn , $query);
  $run = mysqli_num_rows($result);
  if($run>0){
      echo "login successfully";
  }
  else{
      echo "insert data correct";
  }
}
?>