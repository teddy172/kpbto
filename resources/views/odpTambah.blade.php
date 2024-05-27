<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTTH</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<!---------------------body------------------------->
<body style="background:#e4e9f7;">
<div class="">
    @include('/layout/pesan')
    <div class="kartu">
        <a href='/odp'><button type="button" class="btn btn-primary" style="position: relative; left:30px; top:20px;">Kembali</button></a>
        <br>
        <br>
        <h1 style="text-align: center;">Tambah ODP baru</h1>
        <br>
        <br>
        <form Action="{{url('/odp ')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID ODP</label>
                <input type="text" class="form-control" name="nama_odp" aria-describedby="emailHelp" value="{{ Session::get('nama_odp')}}">
            </div>
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02" name="odc_id">
                    <option selected>Pilih...</option>
                    @foreach ( $namaOdc as $ODC)
                    <option value="{{ $ODC->odc_id }}">{{ $ODC->nama_odc }}</option> 
                    @endforeach
                </select>
                <label class="input-group-text" for="inputGroupSelect02">ID ODC</label>
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
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Distribusi</label>
                <input type="text" class="form-control" name="distribusi" value="{{ Session::get('distribusi')}}" >
            </div>
            <button type="submit" class="btn btn-success" style="position: relative; left: 20px;">Tambah</button>
        </form>
    </div>
            
</div>

</body>
</html>