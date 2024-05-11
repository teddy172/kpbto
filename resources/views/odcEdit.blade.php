<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTTH</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body style="background:#e4e9f7;">
<div class="">
    @include('/layout/pesan')
    <div class="kartu">
        <a href='/odc'><button type="button" class="btn btn-primary" style="position: relative; left:30px; top:20px;">Kembali</button></a>
        <br>
        <br>
        <h1 style="text-align: center;">Update ODC</h1>
        <br>
        <br>
        <form Action="{{url('/odc/'.$data->odc_id)}}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID ODC</label>
                <input type="text" class="form-control" name="nama_odc" aria-describedby="emailHelp" value="{{ $data->nama_odc}}">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea2">Lokasi</label>
                <textarea class="form-control" placeholder="ketik lokasi ODC" name="lokasi" style="height: 100px">{{ $data->lokasi}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kordinat</label>
                <input type="text" class="form-control" name="kordinat" value="{{ $data->kordinat}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Slot</label>
                <input type="text" class="form-control" name="slot" value="{{ $data->slot}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sisa slot</label>
                <input type="text" class="form-control" name="sisa_slot" value="{{ $data->sisa_slot}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Port</label>
                <input type="text" class="form-control" name="port" value="{{ $data->port}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sisa port</label>
                <input type="text" class="form-control" name="sisa_port" value="{{ $data->sisa_port}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" value="{{ $data->status}}" >
            </div>
            <button type="submit" class="btn btn-warning" style="position: relative; left: 20px;">Update</button>
        </form>
    </div>
            
</div>

</body>
</html>

