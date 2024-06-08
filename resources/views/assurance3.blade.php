<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Tindakan</title>
    <link rel="stylesheet" type="text/css" href="../css/assurance3.css">
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
                    <a href="/assurance2"><img src="../image/arrowback.png" alt="back"></a>
                    <a href="/index"><img src="../image/home.png" alt="home"></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    Update Tindakan
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>
    <div class="data-container">
        <div class="data-box">
            <div class="row-data" id="text-data-tittle">
                KATEGORI <br>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">IKR/IKG</option>
                        <option value="2">gtw</option>
                        <option value="3">iyakali</option>
                    </select>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                SUB KATEGORI <br>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                        <option value="3">c</option>
                    </select>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                RCA <br>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                        <option value="3">c</option>
                    </select>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                KETERANGAN <br>
                <input class="form-control" type="text" aria-label="default input example">
            </div>
            <div class="row-two" id="btn">
                <div class="column-three" id="text">
                    <button type="button" class="btn-submit" id="text" style="color: #FFFFFF;" onclick="location.href='/assurance2'">
                        SUBMIT
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
