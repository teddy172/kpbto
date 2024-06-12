<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>assurance</title>
    <link rel="stylesheet" type="text/css" href="../css/assurance.css">
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
                    <a href="/"><img src="../image/home.png" alt=""></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    Assurance
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    <div class="data-container">
        @foreach ($data as $item) 
        <a href="{{ url('/keberangkatan/'.$item->id) }}" class="data-box">
            <div>
                <h3>{{$item->nama_pelanggan}}</h3>
                <p>Alamat       : {{$item->alamat}}</p>
                <p>No. HP       : {{$item->no_telepon}}</p>
                <p>No. Incident : {{$item->no_incident}}</p>
                <p>No. Internet : {{$item->no_internet}}</p>
                <p>Keluhan      : {{$item->keluhan}}</p>
            </div>
        </a>
        @endforeach
    </div>


</body>

</html>
