<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/adminODC.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>ODC</title>
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
                    ODC Detail
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    <div class="table-container-primary" id="text">
        <div class="table-box-primary">
        <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Kode ODC <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->nama_odc }}" aria-label="default input example"
                            name="nama_odc" >
                    </div>
                    <div class="column-data">
                        Lokasi <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->lokasi }}" aria-label="default input example"
                            name="lokasi" >
                    </div>
                    <div class="column-data">
                        Koordinat <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->kordinat }}" aria-label="default input example"
                            name="kordinat" >
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Port Terpakai <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->port_terpakai }}" aria-label="default input example"
                            name="port_terpakai" >
                    </div>
                    <div class="column-data">
                        Port Sisa <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->sisa_port }}" aria-label="default input example"
                            name="sisa_port" >
                    </div>
                    <div class="column-data">
                        Total Port <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->port }}" aria-label="default input example"
                            name="port" >
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Slot Terpakai <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->slot_terpakai }}" aria-label="default input example"
                            name="slot_terpakai">
                    </div>
                    <div class="column-data">
                        Slot Sisa <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->sisa_slot }}" aria-label="default input example"
                            name="sisa_slot" >
                    </div>
                    <div class="column-data">
                        Total Slot <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->slot }}" aria-label="default input example"
                            name="slot">
                    </div>
                </div>
                <div class="row-data" id="text-data-tittle">
                    <div class="column-data">
                        Status <br>
                        <input class="form-control" type="text" placeholder="{{ $odc->status }}" aria-label="default input example"
                            name="status">
                    </div>
                    
                </div>
        </div>
    </div>


    {{-- Body --}}
    <div class="table-container" id="text">
        <div class="table-box">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="" scope="col">No</th>
                        <th scope="">Kode ODP</th>
                        <th scope="">Lokasi</th>
                        <th scope="">Status</th>
                        {{-- <th scope="col"></th> --}}
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_odp }}</td>
                        <td>{{ $item->lokasi_odp }}</td>
                        <td>{{ $item->status_odp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
            {{ $data->links() }}
        </div>
    </div>
</body>

</html>
