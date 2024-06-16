<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari ODC</title>
    <link rel="stylesheet" type="text/css" href="../css/cariodc.css">
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
                    <a href="/"><img src="../image/home.png" alt=""></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    CARI ODC
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Search bar --}}
    <div class="search-bar-container">
        <div class="input-group mb-3" id="search-bar">

            <form role="search" Action="{{ url('/ODC/cari') }}" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan Kode ODC"
                    aria-describedby="button-addon2" style="height: 50px;border-radius: 20p 0px 0px 20px"
                    name="search">
                <button class="btn btn-light" type="submit" id="button-addon2"
                    style="width: 50px;height: 50px;justify-content: center;align-items: center;border-width: 1px;border-style: groove;border-color: #B1B1AF"><img
                        src="../image/search.png" style="width: 30px;height: 30px;padding-right:5px;"></button>
            </form>

        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="data-container">
        <div class="data-box">
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Kode ODC <br>
                    @if (isset($data))
                        <p>{{ $data->nama_odc }}</p>
                    @endif
                </div>
                <div class="column-data">
                    Status <br>
                    @if (isset($data))
                        <p>{{ $data->status }}</p>
                    @endif
                </div>
                <div class="column-data">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Lokasi <br>
                    @if (isset($data))
                        <p>{{ $data->lokasi }}</p>
                    @endif
                </div>
                <div class="column-data">
                    Koordinat <br>
                    @if (isset($data))
                        <p>{{ $data->kordinat }}</p>
                    @endif
                </div>
                <div class="column-data">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Slot Terpakai <br>
                    @if (isset($data))
                        <p>{{ $data->slot_terpakai }}</p>
                    @endif
                </div>
                <div class="column-data">
                    Sisa Slot <br>
                    @if (isset($data))
                        <p>{{ $data->sisa_slot }}</p>
                    @endif
                </div>
                <div class="column-data">
                    Total Slot <br>
                    @if (isset($data))
                        <p>{{ $data->slot }}</p>
                    @endif
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Port Terpakai <br>
                    @if (isset($data))
                        <p>{{ $data->port_terpakai }}</p>
                    @endif
                </div>
                <div class="column-data">
                    Sisa Port <br>
                    @if (isset($data))
                        <p>{{ $data->sisa_port }}</p>
                    @endif
                </div>
                <div class="column-data">
                    Total Port <br>
                    @if (isset($data))
                        <p>{{ $data->port }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <a href=" {{ url('/ODC/create') }} ">
                    <button type="button" class="btn btn-lg" id="text"
                        style="background: #D9D9D9">+TAMBAH</button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
