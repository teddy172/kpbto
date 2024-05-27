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
	@include('/layout/pesan')
    	<h2>Login</h2>
    	<form action="{{url('/login/auth')}}" method="POST">
			@csrf
    		<input type="text" name="NIP" placeholder="NIP" class="kontrol-masukan" value="{{ Session::get('NIP') }}">
    		<input type="password" name="password" placeholder="Password" class="kontrol-masukan">
    		<input type="submit" name="submit" value="Login" class="tombol-masukan">
    	</form>
    	
		<p style="text-align: right;"><a href="regis-user.php">Registrasi</a></p>
    </div>
  </body>
</html>