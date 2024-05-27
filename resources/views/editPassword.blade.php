<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTTH</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<!---------------------body------------------------->
<body style="background:#e4e9f7;">
    <a href="{{url('/profil/'.$pass->id)}}"><button type="button" class="btn btn-primary" style="position: relative; left:40px; top:20px;">Kembali</button></a>
        <br>
        <br>
    <div class="">
        <div class="kartu">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ url('/profil/'.$pass->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">password lama</label>
                    <input type="password" class="form-control" name="pass_lama" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">password baru</label>
                    <input type="password" class="form-control" name="pass_baru" aria-describedby="emailHelp" >
                </div>
                    <button type="submit" class="btn btn-primary">ubah password</button>
            </form>
        </div>
    </div>
        
</body>
</html>