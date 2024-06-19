<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah ODC</title>
    <link rel="stylesheet" type="text/css" href="../css/tambahodc.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
</head>

<body>
    {{-- Bootstrap JS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- Bootstrap JS --}}

    {{-- Navbar --}}
    <div class="nav-container">
        <div class="nav-bar">
            <div class="row">
                <div class="column">
                    <a href="/admin"><img src="../image/home.png" alt=""></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    TAMBAH ODC
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <br>
		@include('/layout/pesan')
	</div>   

    {{-- body --}}
    <div class="data-container">
        <div class="data-box">
        <form Action="{{url('/odc')}}" method="post">
            @csrf
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Kode ODC <br>
                    <input class="form-control" type="text" placeholder="Contoh: ODC-KBL-FEB"
                        aria-label="default input example" name="nama_odc" value="{{ Session::get('nama_odc')}}">
                </div>
                <div class="column-data">
                    Lokasi <br>
                    <input class="form-control" type="text" placeholder="Contoh: Kapasan"
                        aria-label="default input example" name="lokasi" value="{{ Session::get('lokasi')}}">
                </div>
                <div class="column-data">
                    Koordinat <br>
                    <input class="form-control" type="text" placeholder="Contoh: -7.23, 112.7"
                        aria-label="default input example" name="kordinat" value="{{ Session::get('kordinat')}}">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Port Terpakai <br>
                    <input class="form-control" type="text" placeholder="Contoh: 14"
                        aria-label="default input example" name="port_terpakai" value="{{ Session::get('port_terpakai')}}">
                </div>
                <div class="column-data">
                    Port Sisa <br>
                    <input class="form-control" type="text" placeholder="Contoh: 2"
                        aria-label="default input example" name="sisa_port" value="{{ Session::get('sisa_port')}}" >
                </div>
                <div class="column-data">
                    Total Port <br>
                    <input class="form-control" type="text" placeholder="Contoh: 144"
                        aria-label="default input example" name="port" value="{{ Session::get('port')}}">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Slot Terpakai <br>
                    <input class="form-control" type="text" placeholder="Contoh: 6"
                        aria-label="default input example" name="slot_terpakai" value="{{ session::get('slot_terpakai')}}">
                </div>
                <div class="column-data">
                    Slot Sisa <br>
                    <input class="form-control" type="text" placeholder="Contoh: 3"
                        aria-label="default input example" name="sisa_slot" value="{{ Session::get('sisa_slot')}}">
                </div>
                <div class="column-data">
                    Total Slot <br>
                    <input class="form-control" type="text" placeholder="Contoh: 16"
                        aria-label="default input example" name="slot" value="{{ Session::get('slot')}}">
                </div>
                <div class="column-data">
                    Status <br>
                    <div class="input-group">
                    <select class="custom-select" name="status">
                        <option selected>...</option>
                        <option value="UP">UP</option>
                        <option value="DOWN">DOWN</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                </div>
                <div class="column-data">
                </div>
                <div class="column-data" style="align-items: end">
                    <button type="submit" class="btn btn-lg" style="color: #FFFFFF;background: #00AB66">SIMPAN</button>
                </div>
            </div>
        </div>
        </form>
    </div>

</body>

</html>
