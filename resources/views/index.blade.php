<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>Index</title>
</head>

<body>
    {{-- Bootstrap JS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- Bootstrap JS --}}

    {{-- Ga dipake, pakai yg bawah. ini cuma buat koreksi aja di logic backend nya --}}
    {{-- <div class="red-nav-container">
        <div class="name-container">
            Halo, {{ Session('profilTeknisi')->name }}
        </div>
        <div class="setting-container">
            <div class ="mini-profile-container">
                <img src="../image/miniprofile-icon.png" style="widows: 48px;height:48px ">
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false"
                    style="padding-bottom: 10px;font-family: Inter-Semibold;font-size: 30px;color: #FFFFFF;">
                    My Account
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('/profil/' . Session('profilTeknisi')->id . '/edit') }}"
                            style="height: 50px;width: 230px;font-size: 20px">Account Setting</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('/logout') }}"
                            style="height: 50px;width: 230px;font-size: 20px">Sign
                            Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="black-nav-container">
        <div class="nav-start">
            Navigation Off
            <span>
                <button type="button" class="btn btn-primary"
                    style="margin-left: 10px; font-family: Inter-Semibold;
    font-size: 30px;
    color: #FFFFFF;">Start<img
                        src="../image/Play.png" style="width:64px;height: 64px;"></button>
            </span>
        </div>
        <div class="points">
            Point (Manhours) <br>
            xxx Points
        </div>
    </div>
    <div class="menu-container">
        <div class="first-row">
            <div class="card presensi"><a href="/absen" style="text-decoration: none">
                    <div class="icon-bg" style="background: #4DAF4E"><img class="menu-icon"
                            src="../image/presensi-icon.png"></div>
                    <div class="card text"> PRESENSI </div>
                </a>
            </div>
            <div class="card presensi"><a href="#" style="text-decoration: none">
                    <div class="icon-bg" style="background: #418AFE"><img class="menu-icon"
                            src="../image/valins-icon.png"></div>
                    <div class="card text"> VALINS </div>
                </a>
            </div>
            <div class="card presensi"><a href="#" style="text-decoration: none">
                    <div class="icon-bg" style="background: #4DAF4E"><img class="menu-icon"
                            src="../image/fullfilment-icon.png"></div>
                    <div class="card text"> FULLFILMENT </div>
                </a>
            </div>
            <div class="card presensi"><a href="{{ url('/assurance/' . Session('profilTeknisi')->id) }}"
                    style="text-decoration: none">
                    <div class="icon-bg" style="background: #32C5F8"><img class="menu-icon"
                            src="../image/assurance-icon.png"></div>
                    <div class="card text"> ASSURANCE </div>
                </a>
            </div>
        </div>
        <div class="second-row">
            <div class="card presensi"><a href="#" style="text-decoration: none">
                    <div class="icon-bg" style="background: #FB8C00"><img class="menu-icon"
                            src="../image/maintenance-icon.png"></div>
                    <div class="card text"> MAINTENANCE </div>
                </a>
            </div>
            <div class="card presensi"><a href="/ODC" style="text-decoration: none">
                    <div class="icon-bg" style="background: #D40033"><img class="menu-icon" src="../image/odc-icon.png">
                    </div>
                    <div class="card text"> CARI ODC </div>
                </a>
            </div>
            <div class="card presensi"><a href="/ODP" style="text-decoration: none">
                    <div class="icon-bg" style="background: #FB8C00"><img class="menu-icon"
                            src="../image/odp-icon.png"></div>
                    <div class="card text"> CARI ODP </div>
                </a>
            </div>
            <div class="card presensi"><a href="#" style="text-decoration: none">
                    <div class="icon-bg" style="background: #6DD4D1"><img class="menu-icon"
                            src="../image/ont-icon.png"></div>
                    <div class="card text"> TUKAR ONT </div>
                </a>
            </div>
        </div>
    </div> --}}

    {{-- Navbar --}}
    <div class="nav-container">
        <div class="nav-bar">
            <div class="row-nav">
                <div class="column-nav" id="name-container">
                    Halo, {{ Session('profilTeknisi')->name }}
                </div>
                <div class="column-nav" style="align-items: end"></div>
                <div class="column-nav" style="align-items: end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="padding-bottom: 10px;font-family: Inter-Semibold;font-size: 30px;color: #FFFFFF;">
                            My Account
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ url('/profil/'.Session('profilTeknisi')->id .'/edit') }}"
                                    style="height: 50px;width: 230px;font-size: 20px">Account Setting</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/logout') }}"
                                    style="height: 50px;width: 230px;font-size: 20px">Sign
                                    Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="menu-container">
        <div class="menu-box">
            <div class="row">
                <div class="column">
                    <div class="card presensi"><a href="/absen" style="text-decoration: none">
                            <div class="icon-bg" style="background: #4DAF4E"><img class="menu-icon"
                                    src="../image/presensi-icon.png"></div>
                            <div class="card text"> PRESENSI </div>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card presensi"><a href="#" style="text-decoration: none">
                            <div class="icon-bg" style="background: #418AFE"><img class="menu-icon"
                                    src="../image/valins-icon.png"></div>
                            <div class="card text"> VALINS </div>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card presensi"><a href="#" style="text-decoration: none">
                            <div class="icon-bg" style="background: #4DAF4E"><img class="menu-icon"
                                    src="../image/fullfilment-icon.png"></div>
                            <div class="card text"> FULLFILMENT </div>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card presensi"><a href="{{ url('/assurance/' . Session('profilTeknisi')->id) }}"
                            style="text-decoration: none">
                            <div class="icon-bg" style="background: #32C5F8"><img class="menu-icon"
                                    src="../image/assurance-icon.png"></div>
                            <div class="card text"> ASSURANCE </div>
                        </a></div>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="card presensi"><a href="#" style="text-decoration: none">
                                <div class="icon-bg" style="background: #FB8C00"><img class="menu-icon"
                                        src="../image/maintenance-icon.png"></div>
                                <div class="card text"> MAINTENANCE </div>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card presensi"><a href="/ODC" style="text-decoration: none">
                                <div class="icon-bg" style="background: #D40033"><img class="menu-icon"
                                        src="../image/odc-icon.png">
                                </div>
                                <div class="card text"> CARI ODC </div>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card presensi"><a href="/ODP" style="text-decoration: none">
                                <div class="icon-bg" style="background: #FB8C00"><img class="menu-icon"
                                        src="../image/odp-icon.png"></div>
                                <div class="card text"> CARI ODP </div>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card presensi"><a href="#" style="text-decoration: none">
                                <div class="icon-bg" style="background: #6DD4D1"><img class="menu-icon"
                                        src="../image/ont-icon.png"></div>
                                <div class="card text"> TUKAR ONT </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>







</body>

</html>
