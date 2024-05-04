<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | FTTH</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
 </head>
  <body id="hal-masuk">
    <div class="kotak-masuk">
    	<h2>Login</h2>
    	<form action="/index" method="POST">
    		<input type="text" name="user" placeholder="Username" class="kontrol-masukan">
    		<input type="password" name="pass" placeholder="Password" class="kontrol-masukan">
    		<input type="submit" name="submit" value="Login" class="tombol-masukan">
    	</form>
    	
		<p style="text-align: right;"><a href="regis-user.php">Registrasi</a></p>
    </div>
  </body>
</html>