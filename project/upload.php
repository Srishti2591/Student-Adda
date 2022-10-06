<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    // print_r($file);
    $filename = $_FILES['file']['name'];
    $filetmpname = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileerror = $_FILES['file']['error'];
    $filetype = $_FILES['file']['type'];
    
    $fileExt = explode('.',$filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileerror === 0){
            if($filesize < 100000){
                $fileNameNew = uniqid('', true). "." .$fleActualExt;
                $fileDestination = 'upload/' . $fileNameNew;
                move_uploaded_file($filetmpname ,$fileDestination);
                header("location: index.php?uploadsucess");
            }else{
                echo "your file is too big!";
            }
        }else{
            echo "there was an error uploading your file!" ;
        }
    }else{
        echo "you cannot upload files of this type!" ;
    }
}
?>