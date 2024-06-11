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
    @include('/layout/pesan')
    <div class="kartu">
        <a href='/odc'><button type="button" class="btn btn-primary" style="position: relative; left:30px; top:20px;">Kembali</button></a>
        <br>
        <br>
        <h1 style="text-align: center;">Tambah ODC baru</h1>
        <br>
        <br>
        <form Action="{{url('/odc ')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID ODC</label>
                <input type="text" class="form-control" name="nama_odc" aria-describedby="emailHelp" value="{{ Session::get('nama_odc')}}">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea2">Lokasi</label>
                <textarea class="form-control" placeholder="ketik lokasi ODC" name="lokasi" style="height: 100px">{{ Session::get('lokasi')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kordinat</label>
                <input type="text" class="form-control" name="kordinat" value="{{ Session::get('kordinat')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Slot</label>
                <input type="text" class="form-control" name="slot" value="{{ Session::get('slot')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sisa slot</label>
                <input type="text" class="form-control" name="sisa_slot" value="{{ Session::get('sisa_slot')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Port</label>
                <input type="text" class="form-control" name="port" value="{{ Session::get('port')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sisa port</label>
                <input type="text" class="form-control" name="sisa_port" value="{{ Session::get('sisa_port')}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" value="{{ Session::get('status')}}" >
            </div>
            <button type="submit" class="btn btn-success" style="position: relative; left: 20px;">Tambah</button>
        </form>
    </div>
            
</div>

</body>
</html>