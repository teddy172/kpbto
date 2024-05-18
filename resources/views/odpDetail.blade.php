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
<div class="">
    <div class="kartu">
        <a href='/odp'><button type="button" class="btn btn-primary" style="position: relative; left:40px; top:20px;">Kembali</button></a>
        <br>
        <br>
            <h1>ID odp:</h1>
                <h2>{{ $odp->nama_odp }}</h2>
            <br>
            <h1>lokasi:</h1>
                <h2>{{ $odp->lokasi}}</h2>
            <br>
            <h1>Kordinat:</h1>
                <h2>{{ $odp->kordinat}}</h2>
            <br>
            <h1>Port:</h1>
                <h2>{{ $odp->port}}</h2>
            <br>
            <h1>Sisa port:</h1>
                <h2>{{ $odp->sisa_port}}</h2>
            <br>
            <h1>Status:</h1>
                <h2>{{ $odp->status}}</h2>
            <br>
            <h1>Distribusi:</hr>
                <h2>{{ $odp->distribusi}}</h2>
    </div>
</div>

</body>
</html>