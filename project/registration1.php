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
        echo "please fill the form" ;
    }
}
    ?>
    