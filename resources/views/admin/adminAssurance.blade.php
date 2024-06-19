<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/adminAssurance.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
    <title>Assurance</title>
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
            <form role="search" Action="{{ url('/admin/assuranceCari') }}" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan Kode ODC"
                    aria-describedby="button-addon2" style="height: 50px;border-radius: 20p 0px 0px 20px"
                    name="assuranceCari">
                <button class="btn btn-light" type="submit" id="button-addon2"
                    style="width: 50px;height: 50px;justify-content: center;align-items: center;border-width: 1px;border-style: groove;border-color: #B1B1AF"><img
                        src="../image/search.png" style="width: 30px;height: 30px;padding-right:5px;"></button>
            </form>
        </div>
    </div>

    <div class="row">
			@include('/layout/pesan')
	</div>   

    {{-- Body --}}
    <div class="table-container" id="text">
        <div class="table-box">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="" scope="col">No</th>
                        <th scope="">Nomer Incident</th>
                        <th scope="">Teknisi</th>
                        <th scope="">Status</th>
                        <th scope="">Action</th>
                        {{-- <th scope="col"></th> --}}
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item)
                    <tr onclick="window.location.href='{{ url('/adminAssurance/'.$item->id_assurance) }}' ">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->no_incident }}</td>
                        <td>{{ $item->teknisi_name }}</td>
                        <td>{{ $item->status }}</td>
                        <td> 
                                <a href="{{ url('/adminAssurance/'.$item->id_assurance.'/edit') }}"><button type="button"
                                        class="btn btn-success">Edit</button></a>
                                <span>
                                    <form class="d-inline" action="{{ url('/adminAssurance/'.$item->id_assurance) }}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                                </span>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination --}}
            {{ $data->links() }}
            
            <div class="pagination-container">
                <div class="row">
                    <div class="column" style="align-items: start">
                        <a href="{{url('/adminAssurance/create')}}">
                            <button style="background: #00AB66;border: none" type="button"
                                class="btn btn-primary btn-lg">Tambah</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .table-group-divider tr {
        cursor: pointer;
    }
    .table-group-divider a {
        text-decoration: none;
    }
</style>
</html>
