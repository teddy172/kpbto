<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/adminAssurance2.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>ASSURANCE</title>
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
                    <a href="/admin"><img src="../image/home.png" style="color:#FFFFFF" alt=""></a>
                </div>
                <div class="column" id="text" style="color: #FFFFFF">
                    ASSURANCE DETAIL
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="table-container" id="text">
        <div class="table-box">
        <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Nama Pelanggan <br>
                        <input class="form-control" type="text" placeholder="{{ $data->nama_pelanggan}}" aria-label="default input example"
                            name="nama_pelanggan" >
                    </div>
                    <div class="column-data">
                        Alamat <br>
                        <input class="form-control" type="text" placeholder="{{ $data->alamat }}" aria-label="default input example"
                            name="alamat" >
                    </div>
                    <div class="column-data">
                        Nomer Telepon <br>
                        <input class="form-control" type="text" placeholder="{{ $data->no_telepon }}" aria-label="default input example"
                            name="no_telepon" >
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Nomer Internet <br>
                        <input class="form-control" type="text" placeholder="{{ $data->no_internet }}" aria-label="default input example"
                            name="no_internet" >
                    </div>
                    <div class="column-data">
                        Nomer Incident <br>
                        <input class="form-control" type="text" placeholder="{{ $data->no_incident }}" aria-label="default input example"
                            name="no_incident" >
                    </div>
                    <div class="column-data">
                        Status <br>
                        <input class="form-control" type="text" placeholder="{{ $data->status }}" aria-label="default input example"
                            name="status" >
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Teknisi Berangkat <br>
                        <input class="form-control" type="text" placeholder="{{ $data->teknisi_berangkat }}" aria-label="default input example"
                            name="teknisi_berangkat" >
                    </div>
                    <div class="column-data">
                        Teknisi Tiba <br>
                        <input class="form-control" type="text" placeholder="{{ $data->teknisi_tiba }}" aria-label="default input example"
                            name="teknisi_tiba" >
                    </div>
                    <div class="column-data">
                        Waktu Estimasi <br>
                        <input class="form-control" type="text" placeholder="{{ $data->waktu_estimasi }}" aria-label="default input example"
                            name="waktu_estimasi" >
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Keluhan <br>
                        <input class="form-control" type="text" placeholder="{{ $data->keluhan }}" aria-label="default input example"
                            name="keluhan" >
                    </div>
                    
                </div>
        </div>
    </div>
    </div>
</body>

</html>
