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
    <a href='/'><button type="button" class="btn btn-primary"
            style="position: relative; left:40px; top:20px;">Kembali</button></a>
    <br>
    <br>
    <p>Checked In: {{ $hasCheckedIn ? 'Yes' : 'No' }}</p>
    <p>Checked Out: {{ $hasCheckedOut ? 'Yes' : 'No' }}</p>


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
    <form action="{{ url('/presensi') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">
            @if ($hasCheckedIn && !$hasCheckedOut)
                Check Out
            @else
                Check In
            @endif
        </button>
    </form>
</body>

</html>
