{{-- Admin Assign Assurance --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign Assurance</title>
    <link rel="stylesheet" type="text/css" href="../css/adminAssurance2.css">
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
                    ASSIGN ASSURANCE
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="data-container">
        <div class="data-box">
            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Nama Pelanggan <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
                <div class="column-data">
                    Alamat <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
            </div>

            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Nomor Handphone <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
                <div class="column-data">
                    Nomor Internet <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
                <div class="column-data">
                    Nomor Incident <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
            </div>

            <div class="row-data" id="text-data-tittle">
                <div class="column-data">
                    Assign to <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
                <div class="column-data">
                    Status <br>
                    <input class="form-control" type="text" placeholder="" aria-label="default input example"
                        name="lokasi" value="">
                </div>
                <div class="column-data"></div>
            </div>

            <div class="row-data" id="text-data-tittle" style="height: 40%">
                <div class="column-data">
                    <label for="Keluhan" class="form-label">Keluhan</label>
                    <textarea class="form-control" id="Keluhan" rows="10"></textarea>
                </div>
                <div class="column-data" style="align-items: end;justify-content: end">
                    <button type="submit" class="btn btn-lg"
                        style="color: #FFFFFF;background: #00AB66;width: 200px">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
