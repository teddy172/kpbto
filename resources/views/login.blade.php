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
    <div class="screen">
        <div class="form-container">
            <div class="title" id="text">
                LOGIN
            </div>
            <div class="form-detail">
                <form style="width: 90% ;height: 100%;">
                    <div class="mb-3" style="width: 100%">
                        <label id="text" for="NIP" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="NIP" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3" style="width: 100%">
                        <label id="text" for="password" class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div style="display: flex; justify-content: center; align-content: center;margin-top: 50px">
                        <button id="text" type="submit" class="btn btn-primary"
                            style="width: 150px;height: 60px;color: #ffffff;background: #00AB66;border: none">SIGN
                            IN</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>
