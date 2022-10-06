<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','projDB');
$id = $_GET['id'];
$query = "DELETE FROM projregister where id = '$id' ";
$data = mysqli_query($conn,$query);
if($data){
    echo "<script>alert('data deleted sucessfully')</script>" ;
    ?>
    <!-- <meta http-equiv = "refresh" content = "0; url = http://localhost:8080/crud/display.php" /> -->
    <?php
}else{
    echo "<scrpit>alert('failed to delete')</script>" ;
}
?>