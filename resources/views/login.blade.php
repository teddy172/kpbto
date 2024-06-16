<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>Login</title>
</head>

<body>
    {{-- Bootstrap JS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- Bootstrap JS --}}

    <div class="data-container">
        <div class="data-box" id="text">
            <div class="row">
                LOGIN
            </div>
            <form style="width: 100% ;height: 100%;" action="{{ url('/login/auth') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3" style="width: 100%">
                        <label id="text" for="NIP" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="NIP" name="NIP" placeholder="NIP"
                            aria-describedby="emailHelp" value="{{ Session::get('NIP') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3" style="width: 100%">
                        <label id="text" for="password" class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div style="display: flex; justify-content: center; align-content: center;margin-top: 50px">
                        <button id="text" type="submit" class="btn btn-primary"
                            style="width: 150px;height: 60px;color: #ffffff;background: #00AB66;border: none"
                            name="submit" value="Login">
                            SIGN IN</button>
                    </div>
                </div>
                <div class="row">
                    @include('/layout/pesan')
                </div>

            </form>

        </div>
    </div>
</body>

</html>
