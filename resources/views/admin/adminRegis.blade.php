<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/adminRegis.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>REGISTRATION</title>
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
                    ADMIN REGISTRATION
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="table-container" id="text">
        <div class="table-box">
        <form Action="{{ url('/admin/signed') }}" method="post">
            @csrf
            <div class="row-data" id="text-data-tittle">
                        <div class="column-data">
                            Nama <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="admin_name" value="{{ Session::get('admin_nama')}}">
                        </div>
                        <div class="column-data">
                            Email <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="admin_email" value="{{ Session::get('admin_email')}}">
                        </div>
                        <div class="column-data">
                            NIP <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="admin_NIP" value="{{ Session::get('admin_NIP')}}">
                        </div>
                    </div>
                    <div class="row-data" id="text-data-tittle">
                        <div class="column-data">
                            Nomer Telepon <br>
                            <input class="form-control" type="text"  aria-label="default input example"
                                name="nomer_telepon_admin" value="{{ Session::get('nomer_telepon_admin')}}">
                        </div>
                        <div class="column-data">
                            Password <br>
                            <input class="form-control" type="password"  aria-label="default input example"
                                name="password" value="">
                        </div>
                        <div class="column-data">
                            Password Confirmed<br>
                            <input class="form-control" type="password"  aria-label="default input example"
                                name="password_confirmation" value="">
                        </div>
                    </div>
                    <div class="row-data" id="text-data-tittle">
                        <div class="column-data"></div>
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
