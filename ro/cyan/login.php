<?php include('server.php') ?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
  <title>Pagina de logare</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
  <div class="header">
  	<h2>Logare</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nume</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Parola</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Logeaza-te</button>
  	</div>
  	<p>
  		Nu esti membru? <a class="btn" href="register.php">Inregistreaza-te</a>
		<a class="btn" href="home.php">Acasa</a>
  	</p>
  </form>
</body>
</html>