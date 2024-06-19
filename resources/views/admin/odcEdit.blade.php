<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit ODC</title>
    <link rel="stylesheet" type="text/css" href="../../css/adminEditODC.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-iso.css">
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
                    <a href="/admin"><img src="../../image/home.png" style="color:#FFFFFF" alt=""></a>
                </div>
                <div class="column" id="text" style="color: #FFFFFF">
                    EDIT ODC
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

    {{-- Body --}}
    <div class="data-container">
        <div class="data-box">
            <form Action="{{ url('/odc/'.$data->odc_id) }}" method="post">
                @csrf
                @method('put')
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Kode ODC <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="nama_odc" value="{{ $data->nama_odc}}">
                    </div>
                    <div class="column-data">
                        Lokasi <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="lokasi" value="{{ $data->lokasi }}">
                    </div>
                    <div class="column-data">
                        Koordinat <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="kordinat" value="{{ $data->kordinat }}">
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Port Terpakai <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="port_terpakai" value="{{ $data->port_terpakai }}">
                    </div>
                    <div class="column-data">
                        Port Sisa <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="sisa_port" value="{{ $data->sisa_port }}">
                    </div>
                    <div class="column-data">
                        Total Port <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="port" value="{{ $data->port }}">
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Slot Terpakai <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="slot_terpakai" value="{{ $data->slot_terpakai }}">
                    </div>
                    <div class="column-data">
                        Slot Sisa <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="sisa_slot" value="{{ $data->sisa_slot }}">
                    </div>
                    <div class="column-data">
                        Slot <br>
                        <input class="form-control" type="text" placeholder="" aria-label="default input example"
                            name="slot" value="{{ $data->slot }}">
                    </div>
                    <div class="column-data">
                        Status <br>
                        <div class="input-group">
                            <select class="custom-select" name="status">
                                <option selected>{{ $data->status }}</option>
                                <option value="UP">UP</option>
                                <option value="DOWN">DOWN</option>
                            </select>
                        </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data"></div>
                    <div class="column-data"></div>
                    <div class="column-data" style="align-items: end;margin-top:25px">
                        <button type="submit" class="btn btn-lg"
                            style="color: #FFFFFF;background: #00AB66;width: 230px">SIMPAN</button>
                    </div>
                </div>
        </div>
        </form>
    </div>

</body>

</html>
