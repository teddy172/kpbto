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
                    <a href="{{ url('/keberangkatan/'.$idasurance) }}"><img src="../image/arrowback.png" alt="back"></a>
                    <a href="/"><img src="../image/home.png" alt="home"></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    Update Tindakan
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>
    @include('/layout/pesan')
    <div class="data-container">
        <form action="{{ url('/tindakan/tambah') }}" method="post" id="mainForm">
        <input type="hidden" name="assurance_id" value="{{ $idasurance }}">
        @csrf
        <div class="data-box">
            <div class="row-data" id="text-data-tittle">
                KATEGORI <br>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01" name="kategori">
                        <option selected>Choose...</option>
                        <option value="IKR/IKG">IKR/IKG</option>
                        <option value="CPE">CPE</option>
                        <option value="DROP CORE">DROP CORE</option>
                        <option value="NON TEKNIS">NON TEKNIS</option>
                        <option value="ODC">ODC</option>
                        <option value="ODP">ODP</option>
                        <option value="ONT">ONT</option>
                        <option value="STB">STB</option>
                    </select>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                SUB KATEGORI <br>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01" name="sub_kategori">
                        <option selected>Choose...</option>
                        <option value="CRIMPING ULANG KABEL LAN">CRIMPING ULANG KABEL LAN</option>
                        <option value="PERBAIKAN IKR/IKG">PERBAIKAN IKR/IKG</option>
                    </select>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                RCA <br>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect01" name="RCA">
                        <option selected>Choose...</option>
                        <option value="Pembersihan Konektor dan Adapter">Pembersihan Konektor dan Adapter</option>
                        <option value="Ganti Konektor dan Adapter">Ganti Konektor dan Adapter</option>
                    </select>
                </div>
            </div>
            <div class="row-data" id="text-data-tittle">
                KETERANGAN <br>
                <input class="form-control" type="text" aria-label="default input example" name="keterangan">
            </div>
            <div class="row-two" id="btn">
                <div class="column-three" id="text">
                    <button type="submit" class="btn-submit" id="text" style="color: #FFFFFF;">
                        SUBMIT
                    </button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>
