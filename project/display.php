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
        .delete{
            background-color: red;
            color:white;
        }
        .update{
            background-color: green;
            color:white;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','projDB');

$query = "SELECT * FROM projregister";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
// echo $total ;
// $result = mysqli_fetch_assoc($data);
//echo $result['name'] . " ".$result['address'] . " ".$result['contact'] . " ".$result['email'] . " ".$result['password'] . " ".$result['cpassword'] ;
//data ko array form me lata h
if($total != 0){
    // echo "table has record" ;
?>
<h1 align="center"><ins>DISPLAY ALL RECORDS</ins></h1>
<table cellspacing="7" class="table table-striped table-bordered table-dark">
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>ADDRESS</th>
    <th>CONTACT</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
    <th>CPASSWORD</th>
    <th>OPERATION</th>
    </tr>
    <?php
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
        <td>". $result['id'] ."</td>
        <td>". $result['name'] ."</td>
        <td>". $result['address'] . "</td>
        <td>". $result['contact'] . "</td>
        <td>". $result['email'] . "</td>
        <td>". $result['password'] . "</td>
        <td>". $result['cpassword'] . "</td>
        <td><a href='update_design.php?id=$result[id]'><input type='submit' value='update' class='update'></a>
        <a href='delete.php?id=$result[id]'><input type='submit' value='delete' class='delete' onclick =' return datadelete()'></a></td>
        </tr>";
        //echo $result['name'] . " ". $result['address'] . " ". $result['contact'] . " ". $result['email'] . " ". $result['password'] . " ". $result['cpassword']."</br>";
    }
}else{
    echo "no record found" ;
}
?>
</table>
<script>
    function datadelete(){
        return confirm('Are you sure you want to delete this record ?');
    }
</script>
