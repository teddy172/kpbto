<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTTH</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<!---------------------body------------------------->
<body style="background:#e4e9f7;">
    <a href='/'><button type="button" class="btn btn-primary" style="position: relative; left:40px; top:20px;">Kembali</button></a>
        <br>
        <br>
    <div class="">
        <div class="kartu">
            <h1>nama teknisi:</h1>
                <h2>{{ $profil->name }}</h2>
            <br>
            <h1>nomer telepon:</h1>
                <h2>{{ $profil->nomer_telepon }}</h2>
            <br>
            <h1>email:</h1>
                <h2>{{ $profil->email }}</h2>
            <br>
            <h1>NIP:</h1>
                <h2>{{ $profil->NIP }}</h2>
            <br>
            <a href="{{url('profil/'.$profil->id.'/edit')}}"><button type="button" class="btn btn-primary">ubah password</button></a>
        </div>
    </div>
        
</body>
</html>