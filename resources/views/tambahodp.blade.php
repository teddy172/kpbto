<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah ODP</title>
    <link rel="stylesheet" type="text/css" href="../css/tambahodp.css">
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
                    TAMBAH ODP
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    <div class="data-container">
        <div class="data-box">
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Kode ODC <br>
                    <input class="form-control" type="text" placeholder="Contoh: ODC-KBL-FEB"
                        aria-label="default input example">
                </div>
                <div class="column-data">
                    Lokasi <br>
                    <input class="form-control" type="text" placeholder="Contoh: Kapasan"
                        aria-label="default input example">
                </div>
                <div class="column-data">
                    Koordinat <br>
                    <input class="form-control" type="text" placeholder="Contoh: -7.23, 112.7"
                        aria-label="default input example">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Distribusi <br>
                    <input class="form-control" type="text" placeholder="Contoh: 14"
                        aria-label="default input example">
                </div>
                <div class="column-data">
                    Port Terpakai <br>
                    <input class="form-control" type="text" placeholder="Contoh: 2"
                        aria-label="default input example">
                </div>
                <div class="column-data">
                    Port Sisa <br>
                    <input class="form-control" type="text" placeholder="Contoh: 144"
                        aria-label="default input example">
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Total Port <br>
                    <input class="form-control" type="text" placeholder="Contoh: 6"
                        aria-label="default input example">
                </div>
                <div class="column-data"></div>
                <div class="column-data"></div>
            </div>
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                </div>
                <div class="column-data">
                </div>
                <div class="column-data" style="align-items: end">
                    <button type="button" class="btn btn-lg" style="color: #FFFFFF;background: #00AB66">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
