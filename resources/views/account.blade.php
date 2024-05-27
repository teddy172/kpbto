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

    {{-- Navbar --}}
    <div class="nav-container-navbar">
        <div class="nav-bar-navbar">
            <div class="row">
                <div class="column">
                    <a href="/index"><img src="../image/home.png" alt=""></a>
                </div>
                <div class="text column-one" id="text" style="color: #FFFFFF">
                    PROFILE
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    <div class="profile-container">
        <img src="../image/profile-icon.png" alt=""><a href=""></a>
    </div>
    <div class="data-container">
        <div class= "bio-container">
            {{-- Navbar --}}
            <div class="nav-container text">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="true" style="color: #36454F;">PROFILE
                        </button>
                        <button class="nav-link" id="nav-keamanan-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-keamanan" type="button" role="tab" aria-controls="nav-keamanan"
                            aria-selected="true" style="color: #36454F;">KEAMANAN
                        </button>
                    </div>
                </nav>
            </div>
            {{-- Navbar --}}
            {{-- Tab Page --}}
            <div class="tab-content
                            text" id="nav-tabContent">
                {{-- Profile Page --}}
                <div class="tab tab-pane fade show active" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <div class="row text">
                        <div class="column">
                            <label for="NAMA" class="form-label">NAMA</label>
                            <input type="text" class="form-control" id="NAMA" aria-describedby="emailHelp"
                                style="height: 50px">

                        </div>
                        <div class="column">
                            <label for="NO-TELEPON" class="form-label">NO TELEPON</label>
                            <input type="text" class="form-control" id="NO-TELEPON" aria-describedby="emailHelp"
                                style="height: 50px">
                        </div>
                    </div>
                    <div class="row text">
                        <div class="column">
                            <label for="NIP" class="form-label">NIP</label>
                            <input type="text" class="form-control" id="NIP" aria-describedby="emailHelp"
                                style="height: 50px">
                        </div>
                        <div class="column">
                            <label for="EMAIL" class="form-label">EMAIL</label>
                            <input type="email" class="form-control" id="EMAIL"
                                aria-describedby="emailHelp"style="height: 50px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="column"></div>
                        <div class="column"></div>
                        <div class="column-one">
                            <button type="submit" class="btn btn-primary"
                                style="color: #FAFAFA;background: #00AB66;font-family:Inter-Semibold;font-size: 30px;border: none">SAVE</button>
                        </div>
                    </div>
                </div>
                {{-- Keamanan Page --}}
                <div class="tab tab-pane fade p-3" id="nav-keamanan" role="tabpanel"
                    aria-labelledby="nav-keamanan-tab">
                    <div class="row text">
                        <div class="column">
                            <label for="Pass-lama" class="form-label">PASSWORD LAMA</label>
                            <input type="text" class="form-control" id="Pass-lam" aria-describedby="emailHelp"
                                style="height: 50px">
                        </div>
                        <div class="column">
                            <label for="Pass-baru" class="form-label">PASSWORD BARU</label>
                            <input type="text" class="form-control" id="Pass-bar" aria-describedby="emailHelp"
                                style="height: 50px">
                        </div>
                    </div>
                    <div class="row" style="height: 30vh">
                        <div class="column"></div>
                        <div class="column"></div>
                        <div class="column-one">
                            <button type="submit" class="btn btn-primary"
                                style="color: #FAFAFA;background: #00AB66;font-family:Inter-Semibold;font-size: 30px;border: none">SAVE</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
