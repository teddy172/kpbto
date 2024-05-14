<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/account.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>My Account</title>
</head>

<body>
    {{-- Bootstrap JS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- Bootstrap JS --}}
    <div class="profile-container">
        <img src="../image/profile-icon.png" alt=""><a href=""></a>
    </div>
    <div class="data-container">
        <div class= "bio-container">
            {{-- Navbar --}}
            <div class="nav-container my-5">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="true">PROFILE
                        </button>
                        <button class="nav-link" id="nav-keamanan-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-keamanan" type="button" role="tab" aria-controls="nav-keamanan"
                            aria-selected="true">KEAMANAN
                        </button>
                    </div>
                </nav>
            </div>
            {{-- Navbar --}}
            {{-- Tab Page --}}
            <div class="tab-content" id="nav-tabContent">
                {{-- Profile Page --}}
                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <div class="first-row">
                        <div class="mb-3" style="width: 100%">
                            <label id="text" for="NIP" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="NIP" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3" style="width: 100%">
                            <label id="text" for="password" class="form-label">PASSWORD</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="second-row">
                        <p>lorem10</p>

                    </div>
                </div>
                {{-- Keamanan Page --}}
                <div class="tab-pane fade p-3" id="nav-keamanan" role="tabpanel" aria-labelledby="nav-keamanan-tab">
                    <h2>Keamanan</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quis deserunt ipsa! Illo
                        asperiores minus aut modi excepturi nesciunt numquam?</p>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
