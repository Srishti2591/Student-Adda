<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head><br>
<title> Login - </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css">
</head>
<style>
  /* .container{
    margin-top: 10px;
  } */
  .soon{
    display: flex;
	margin-top:0px;
  }
  .soon h1{
    margin-left: 400px;
    color: #e75499;
  }
</style>
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
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="login_process.php" method="POST">
  <div class="form-group">

<?php 
if(isset($_POST['loginerror'])) {
	$loginerror=$_POST['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

    <label class="label_txt">Username or Email </label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn">Login</button>
</form>
<p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgot-password.php" style="color: #00376b;">Forgot Password?</a> </p>
   <br> 
    <p>Don't have an account? <a href="signup.php">Sign up</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>