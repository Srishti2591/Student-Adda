<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','projDB');
// if($conn){
//     echo "connection successful";
// }else{
//     echo "connection give error:". mysqli_connect_error();
// }
// $sql="CREATE DATABASE projDB";
// $result=mysqli_query($conn,$sql);
// $sql = "CREATE TABLE `projregister` ( `id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY , `name` VARCHAR(20) NOT NULL , `address` VARCHAR(50) NOT NULL , `contact` INT(10) NOT NULL , `email` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , `cpassword` VARCHAR(30) NOT NULL)";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo "table created successfully";
// }
if(isset($_POST['submit'])){
    $username=$_POST['name'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
// password safe rhe koi misuse na kr sake.......
    $password11=password_hash($password , PASSWORD_BCRYPT);
    $cpassword12=password_hash($cpassword , PASSWORD_BCRYPT);
// check email already exist or not.......
    $emailquery = "SELECT * FROM projregister where email='$email'";
    $query = mysqli_query($conn , $emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount>0){
        echo "email already exit";
    }
    else
        // if($password===$cpassword)
        $iquery="insert into `projregister`(`name`,`address`,`contact`,`email`,`password`,`cpassword`) values('$username','$address','$number','$email','$password11','$cpassword12')";
        $run = mysqli_query($conn,$iquery);
}
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     if(empty($_POST['name'])){
//         echo "name is required";
//     }
// }
// find the number of records return
// echo mysqli_num_rows();
?>
