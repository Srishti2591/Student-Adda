<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','projDB');
$id = $_GET['id'];
$query = "SELECT * FROM projregister where id = '$id'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
while($result = mysqli_fetch_assoc($data))
?>
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
            height:450px;
            width:300px;
            /* border:1px solid grey; */
            box-shadow: 10px 5px 10px 10px grey;
            margin-left: 380px;
            margin-top: 120px;
            padding: 10px;
        }
        h3{
            color:red;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
    </head>
<body>
    <form action="" name="myform" onsubmit="welcome()" method="POST">
        <div class="container">
            <div class="box">
                <h3>Update Form</h3>
                <div class="mb-3"><input type="text" value="<?php echo $result['name'];?>" name="name" required id="name" placeholder="Full Name" class="form-control"></div>
                <div class="mb-3"><input type="text" value="<?php echo $result['address'];?>" name="address" required id="address" placeholder="Add country,city or landmark" class="form-control"></div>
                <div class="mb-3"><input type="number" value="<?php echo $result['contact'];?>" name="number" required id="number" placeholder="mobile number" class="form-control"></div>
                <div class="mb-3"><input type="email" value="<?php echo $result['email'];?>" value="<?php echo $result['name'];?>" name="email" required id="email" placeholder="Email address" class="form-control"></div>
                <div class="mb-3"><input type="password" value="<?php echo $result['password'];?>" name="password" required id="password" placeholder="password" class="form-control"></div>
                <div class="mb-3"><input type="password" value="<?php echo $result['cpassword'];?>" name="cpassword" required id="cpassword" placeholder="confirm password" class="form-control"></div>
                <div class="mb-3"><button class="btn btn-danger form-control" type="submit" value="submit" name="submit">Update details</button></div>
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
    if($username != "" && $address !="" && $number !="" && $email !="" && $password11 !="" && $cpassword12 !=""){
        $iquery="insert into `projregister`(`name`,`address`,`contact`,`email`,`password`,`cpassword`) values('$username','$address','$number','$email','$password11','$cpassword12')";
        $run = mysqli_query($conn,$iquery);
        if($run){
            echo "data inserted successfully" ;
        }else{
            echo "failed" ;
        }
    }
    else{
        echo "<script>alert('please fill the form');</script>";
    }
}
    ?>

