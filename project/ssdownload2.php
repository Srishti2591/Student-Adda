<?php include 'ssfileslogic2.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!-- <link rel="stylesheet" href="ssstyle.css"> -->
  <title>Download files</title>
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
        .hole{
            position: absolute;
            margin-left: 1250px;
            display: flex;
            margin-top: 60px;
        }
        .hole .btn{
            margin: 10px;
        }
        .sum{
          display:flex;
        }
        #taall{
            width:200px;
            background-color: gray;
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
        <div class="hole">
            <a href="ssindex2.php"><button class="btn btn-success" id="tall">UPLOAD</button></a>
        </div>
        </nav>
    <div class="sum">
    <div class="tab">
        <div class="vertical-menu">
            <a href=""><p>Subjects available right now:-</p></a>
            <a href="">C</a>
            <a href="">C++</a>
            <a href="">PHP</a>
            <a href="">JAVA</a>
            <a href="">SQL</a>
            <a href="">HTML</a>
            <a href="">CSS</a>
            <a href=""><p>want other subjects ?comment please</p></a>
        </div>
        <a href="index.php"><button class="btn btn-success" id="taall">COMMENT</button></a>
    </div>

<table class="table table-bordered table-striped m-5">
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td>
          
          <a href="uploads/<?php echo $file['name'] ?>">View & Download</a>
           
        </td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
    </div>

</body>
</html>