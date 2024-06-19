<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Assurance</title>
    <link rel="stylesheet" type="text/css" href="../css/adminAssurance.css">
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


    {{-- navbar --}}
    <div class="nav-container">
        <div class="nav-bar">
            <div class="row">
                <div class="column" style= "align-items: start;">
                    <a href="/"><img src="../image/home.png" style="color:#FFFFFF" alt=""></a>
                </div>
                <div class="column" id="text" style="color: #FFFFFF">
                    ADMIN ASSURANCE
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>

    {{-- Search bar --}}
    <div class="search-bar-container">
        <div class="input-group mb-3" id="search-bar">
            <form role="search" Action="{{ url('/ODC/cari') }}" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan Nomor Incident"
                    aria-describedby="button-addon2" style="height: 50px;border-radius: 20p 0px 0px 20px"
                    name="search">
                <button class="btn btn-light" type="submit" id="button-addon2"
                    style="width: 50px;height: 50px;justify-content: center;align-items: center;border-width: 1px;border-style: groove;border-color: #B1B1AF"><img
                        src="../image/search.png" style="width: 30px;height: 30px;padding-right:5px;"></button>
            </form>
        </div>
    </div>

    {{-- Body --}}
    <div class="table-container" id="text">
        <div class="table-box">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="" scope="col">No</th>
                        <th scope="">Nomor Incident</th>
                        <th scope="">Teknisi</th>
                        <th scope="">Status</th>
                        <th scope="">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>INC12345 </td>
                        <td>Fajar</td>
                        <td>Belum Selesai</td>
                        <td> <a href=""><button type="button" class="btn btn-success">Edit</button></a>
                            <span>
                                <a href="">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="pagination-container">
                <div class="row">
                    <div class="column" style="align-items: start">
                        <a href="">
                            <button style="background: #00AB66;border: none" type="button"
                                class="btn btn-primary btn-lg">ASSIGN</button>
                        </a>
                    </div>
                    <div class="column"></div>
                    <div class="column" style="align-items: end;margin-top: 5px">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
