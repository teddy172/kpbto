<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/adminAssurance2.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>TAMBAH ASSURANCE</title>
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
                    TAMBAH ASSURANCE
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="table-container" id="text">
        <div class="table-box">
        <form Action="{{ url('/adminAssurance') }}" method="post">
            @csrf
            <div class="row-data" id="text-data-tittle">
                        <div class="column-data">
                            Nama Pelanggan <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="nama_pelanggan" value="">
                        </div>
                        <div class="column-data">
                            Alamat <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="alamat" value="">
                        </div>
                        <div class="column-data">
                            Nomer Telepon <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="no_telepon" value="">
                        </div>
                    </div>
                    <div class="row-data" id="text-data-tittle">
                        <div class="column-data">
                            Nomer Internet <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="no_internet" value="">
                        </div>
                        <div class="column-data">
                            Nomer Incident <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="no_incident" value="">
                        </div>
                        <div class="column-data">
                            Status<br>
                            <select class="form-select" id="inputGroupSelect02" name="status">
                                <option selected>Pilih...</option>
                                <option value="open">open</option> 
                            </select>
                        </div>
                    </div>
                    <div class="row-data" id="text-data-tittle">
                        <div class="column-data">
                            Teknisi<br>
                            <select class="form-select" id="inputGroupSelect02" name="teknisi_id">
                                <option selected>Pilih...</option>
                                @foreach ( $teknisi as $teknisiNama)
                                <option value="{{ $teknisiNama->id }}">{{ $teknisiNama->name }}</option> 
                                @endforeach
                            </select>  
                        </div>
                        <div class="column-data">
                            Keluhan <br>
                            <textarea class="form-control" type="text"  aria-label="default input example"
                                name="keluhan" value=""></textarea>
                        </div>
                        <div class="column-data" style="align-items: end">
                                <button type="submit" class="btn btn-lg" style="color: #FFFFFF;background: #00AB66">SIMPAN</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>
    </div>
</body>

</html>
