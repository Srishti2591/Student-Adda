<?php include 'ssfileslogic2.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="ssstyle.css">
    <title>Files Upload and Download</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .vertical-menu {
            width: 200px;
        }

        .vertical-menu a {
             background-color: #fcc0da;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
            font-style: oblique;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .vertical-menu a:hover {
             background-color: palevioletred;
        }
        /* .vertical-menu a.active {
             background-color: palevioletred;
             color: white;
        } */
        .soon{
            display: flex;
        }
        .soon h1{
            margin-left: 370px;
            font-style: cursive;
            word-spacing: 5px;
            color: #e75499;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .sum{
          display: flex;
        }
        .row{
          margin:50px;
          height:300px;
          width:500px;
          margin-left: 200px;
          margin-top: 100px;
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
    <div class="sum">
    <div class="tab">
        <div class="vertical-menu">
            <a href="">C</a>
            <a href="">C++</a>
            <a href="">PHP</a>
            <a href="">JAVA</a>
            <a href="">SQL</a>
            <a href="">HTML</a>
            <a href="">CSS</a>
        </div>
    </div>
    <div class="container">
      <div class="row">
        <form action="ssindex2.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
    </div>
  </body>
</html>
