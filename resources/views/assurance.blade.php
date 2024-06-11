<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <title>Assurance</title>
</head>
<body>
    <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">nama pelanggan</th>
                        <th scope="col">alamat</th>
                        <th scope="col">no hp</th>
                        <th scope="col">no incident</th>
                        <th scope="col">no internet</th>
                        <th scope="col">keluhan</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item) 
                    <!-- $item==odc_id -->
                    <tr class="clickable-row" data-href="{{ url('/keberangkatan/'.$item->id) }}">
                            <td>{{$item->nama_pelanggan}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->no_telepon}}</td>
                            <td>{{$item->no_incident}}</td>
                            <td>{{$item->no_internet}}</td>
                            <td>{{$item->keluhan}}</td>
                    </tr>
                    @endforeach
                </tbody>
    </table> 

    <!-- Tambahkan jQuery jika belum ada -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>
        $(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
</body>
</html>