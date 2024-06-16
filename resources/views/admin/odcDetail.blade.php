<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTTH</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<!---------------------body------------------------->

<body style="background:#e4e9f7;">
    <div class="">
        <div class="kartu">
            <a href='/odc'><button type="button" class="btn btn-primary"
                    style="position: relative; left:40px; top:20px;">Kembali</button></a>
            <br>
            <br>
            <h1>ID ODC:</h1>
            <h2>{{ $odc->nama_odc }}</h2>
            <br>
            <h1>lokasi:</h1>
            <h2>{{ $odc->lokasi }}</h2>
            <br>
            <h1>Kordinat:</h1>
            <h2>{{ $odc->kordinat }}</h2>
            <br>
            <h1>Slot:</h1>
            <h2>{{ $odc->slot }}</h2>
            <br>
            <h1>Sisa slot:</h1>
            <h2>{{ $odc->sisa_slot }}</h2>
            <br>
            <h1>Port:</h1>
            <h2>{{ $odc->port }}</h2>
            <br>
            <h1>Sisa port:</h1>
            <h2>{{ $odc->sisa_port }}</h2>
            <br>
            <h1>Status:</h1>
            <h2>{{ $odc->status }}</h2>
            <br>
            <br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID ODP</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item)
                        <!-- $item==odc_id -->
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_odp }}</td>
                            <td>{{ $item->lokasi_odp }}</td>
                            <td>{{ $item->status_odp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
