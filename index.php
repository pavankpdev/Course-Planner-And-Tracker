<?php
session_start();
if (isset($_SESSION['username'])) {
header('Location: home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="logstyle.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php include 'header.php';?>
<form id="home_form" method="GET" action="loginproc.php">
			    	
<div class="login-wrap">
  <div class="login-html" align="center">
<h2>Login</h2>
<a href="http://localhost/cpt/shome.php">Student</a><br><br>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Staff</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Admin</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" type="text" name="username" class="input" placeholder="Username" required>
        </div><br>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" name="password" class="input" data-type="password" placeholder="Password" required>
        </div>
        <br>
        <div class="group">
          <input type="submit" class="button" value="Login">

        </div>
        
</div>
</form>
<form id="home_form" method="GET" action="loginproc2.php">
			    	<div class="box-body">
      <div class="sign-up-htm">
        <div class="group">
          <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" type="text" name="username" class="input" placeholder="Username" required>
        </div><br>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" name="password" class="input" data-type="password" placeholder="Password" required>
        </div>
        <br>
        <div class="group">
          <input type="submit" class="button" value="Login">

        </div>
        
</div>
</form>

<?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>

</body>

</html>
