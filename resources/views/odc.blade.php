@extends('layout/main')<!-- ini kode parent -->

@section('kontainer')<!-- kodenya tulis disini -->
<div class="kontainer">
    <div class="card-header">
        <h2>Daftar ODC</h2>
    </div>
</div>
<br>
<div class="kontainer">
<div style="position: relative; top: 20px">
    <a href="{{url('/odc/create')}}">
        <button type="button" class="btn btn-success" style="position: relative; left: 30px">Tambah</button>
    </a>
    <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID ODC</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Kordinat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <a href style="margin-left: 10px;"><button type="button" class="btn btn-primary">Lihat</button></a>
                                <a href style="margin-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href style="margin-left: 10px;"><button type="button" class="btn btn-danger">Hapus</button></a>
                            </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                    </tr>
                </tbody>
    </table> 
</div>
</div>
@endsection