<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit ODP</title>
    <link rel="stylesheet" type="text/css" href="../css/adminEditODP.css">
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


    {{-- navbar --}}
    <div class="nav-container">
        <div class="nav-bar">
            <div class="row">
                <div class="column" style= "align-items: start;">
                    <a href="/"><img src="../image/home.png" style="color:#FFFFFF" alt=""></a>
                </div>
                <div class="column" id="text" style="color: #FFFFFF">
                    EDIT ODP
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="data-container">
        <div class="data-box">
            <form Action="{{ url('/ODP ') }}" method="post">
                @csrf
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Kode ODP <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="nama_odp" value="{{ Session::get('nama_odp') }}">
                    </div>
                    <div class="column-data">
                        Lokasi <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="lokasi" value="{{ Session::get('lokasi') }}">
                    </div>
                    <div class="column-data">
                        Koordinat <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="kordinat" value="{{ Session::get('kordinat') }}">
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Distribusi <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="distribusi" value="{{ Session::get('distribusi') }}">
                    </div>
                    <div class="column-data">
                        Port Terpakai <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="port_terpakai" value="{{ Session::get('port_terpakai') }}">
                    </div>
                    <div class="column-data">
                        Port Sisa <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="sisa_port" value="{{ Session::get('sisa_port') }}">
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Total Port <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="port" value="{{ Session::get('port') }}">
                    </div>
                    <div class="column-data">
                        Status <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="status" value="{{ Session::get('status') }}">
                    </div>
                    <div class="column-data"></div>
                </div>

                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                    </div>
                    <div class="column-data">
                    </div>
                    <div class="column-data" style="align-items: end">
                        <button type="submit" class="btn btn-lg"
                            style="color: #FFFFFF;background: #00AB66">SIMPAN</button>
                    </div>
                </div>
                </from>
        </div>
    </div>

</body>

</html>
