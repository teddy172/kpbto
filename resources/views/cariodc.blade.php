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
                    <a href="/index"><img src="../image/home.png" alt=""></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    CARI ODC
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    <div class="search-bar-container">
        <div class="input-group mb-3" id="search-bar">
            <input type="text" class="form-control" placeholder="Masukkan Kode ODC" aria-describedby="button-addon2"
                style="height: 50px;border-radius: 20p 0px 0px 20px">
            <button class="btn btn-light" type="button" id="button-addon2"
                style="width: 50px;height: 50px;justify-content: center;align-items: center;border-width: 1px;border-style: groove;border-color: #B1B1AF"><img
                    src="../image/search.png" style="width: 30px;height: 30px;padding-right:5px;"></button>
        </div>
    </div>

    <div class="data-container">
        <div class="data-box">
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Kode ODC <br>
                    <p>ODC-KBL-FEB</p>
                </div>
                <div class="column-data">
                    Status <br>
                    <p>Aktif</p>
                </div>
                <div class="column-data">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Lokasi <br>
                    <p>Kapasan</p>
                </div>
                <div class="column-data">
                    Koordinat <br>
                    <p>117.2,120</p>
                </div>
                <div class="column-data">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Slot Terpakai <br>
                    <p>3</p>
                </div>
                <div class="column-data">
                    Sisa Slot <br>
                    <p>2</p>
                </div>
                <div class="column-data">
                    Total Slot <br>
                    <p>8</p>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Port Terpakai <br>
                    <p>40</p>
                </div>
                <div class="column-data">
                    Sisa Port <br>
                    <p>104</p>
                </div>
                <div class="column-data">
                    Total Port <br>
                    <p>144</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <a href="/tambahodc">
                    <button type="button" class="btn btn-lg" id="text"
                        style="background: #D9D9D9">+TAMBAH</button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
