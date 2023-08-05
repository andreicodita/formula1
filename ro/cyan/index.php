<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Trebuie sa te loghezi mai intai!";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Esti logat!</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

<div class="header">
	<h2>Esti logat!</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Bine ai venit <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="logout.php?logout='1'">Delogheaza-te</a> </p>
		<p> <a href="home.php">Acasa</a> </p>
    <?php endif ?>
</div>

</body>
</html>