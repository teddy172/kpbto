<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="../css/adminHome.css">
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
                </div>
                <div class="column" id="text" style="color: #FFFFFF">
                    ADMIN PAGE
                </div>
                <div class="column" style="align-items: end">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"
                        style="padding-bottom: 10px;font-family: Inter-Semibold;font-size: 30px;color: #FFFFFF;background: #009000;border: none">
                        My Account
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href=""
                                style="height: 50px;width: 230px;font-size: 20px">Account Setting</a>
                        </li>
                        <li><a class="dropdown-item" href="="
                                style="height: 50px;width: 230px;font-size: 20px">Sign
                                Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="menu-container">
        <div class="menu-box">
            <div class="row">
                <div class="column">
                    <div class="card presensi"><a href="/ODC" style="text-decoration: none">
                            <div class="icon-bg" style="background: #D40033"><img class="menu-icon"
                                    src="../image/odc-icon.png">
                            </div>
                            <div class="card text">ODC</div>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card presensi"><a href="/ODP" style="text-decoration: none">
                            <div class="icon-bg" style="background: #FB8C00"><img class="menu-icon"
                                    src="../image/odp-icon.png"></div>
                            <div class="card text"> ODP </div>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card presensi"><a href="" style="text-decoration: none">
                            <div class="icon-bg" style="background: #32C5F8"><img class="menu-icon"
                                    src="../image/assurance-icon.png"></div>
                            <div class="card text"> ASSURANCE </div>
                        </a>
                    </div </div>
                </div>
            </div>
        </div>

</body>

</html>
