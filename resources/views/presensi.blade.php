<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRESENSI</title>
    <link rel="stylesheet" type="text/css" href="../css/presensi.css">
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
                    PRESENSI
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- CHECK IN Container --}}
    <div class="check-in-container">
        <div class="check-in-box">
            <div class="row-one" id="text" style="font-size: 36px">
                <div class="column-two-one">
                    JAM KERJA
                </div>
                <div class="column-two-two">
                    {{ $timeNow  }}
                </div>
            </div>
            <div class="row-two">
                <div class="column-three" id="text" style="font-size: 50px">
                    07:30 - 18:00
                </div>
            </div>
            <div class="row-two">
                <div class="column-three" id="text">
                    <form action="{{ url('/presensi') }}" method="POST">
                    @csrf
                        <button type="submit" class="button-presensi" id="text"
                            style="color: #FFFFFF;">
                            @if($hasCheckedIn && !$hasCheckedOut)
                                Check Out
                            @else
                                Check In
                            @endif
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="history-txt-container">
        <div class="row">
            <div class="column-four"></div>
            <div class="column-four" style="flex: 3" id="text">
                History
            </div>
            <div class="column-four"></div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- History Card --}}
    <div class="history-card-container" style="margin: 25px 0px; display: flex; flex-direction: column; align-items: center;">
        @foreach($data as $daftar)
            <div class="row-card" style="display: flex; flex-direction: column; margin-bottom: 10px; width: 100%; max-width: 950px;">
                <div class="column-five"></div>
                <div class="column-five" style="flex: 2">
                    <div class="history-card" id="text" style="font-size: 20px">
                        <div class="row-card-detail-one">
                            {{ $daftar->tanggal }}
                        </div>
                        <div class="row-card-detail-two">
                            <div class="column-card-detail"
                                style="width: 5%; align-items: end;justify-content: center;padding-right: 10px">
                                <img src="../image/check-in.png" style="width: 40px;height: 40px;">
                            </div>
                            <div class="column-card-detail" style="width: 45%">
                                CHECK IN <br>
                                {{ $daftar->check_in }}
                            </div>
                            <div class="column-card-detail"
                                style="width: 5%; align-items: end;justify-content: center;padding-right: 10px">
                                <img src="../image/check-in.png" style="width: 40px;height: 40px;">
                            </div>
                            <div class="column-card-detail" style="width: 45%">
                                CHECK OUT <br>
                                {{ $daftar->check_out }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column-five"></div>
            </div>
        @endforeach
    </div>



</body>

</html>
