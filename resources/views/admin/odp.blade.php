@extends('layout/main')<!-- ini kode parent -->

@section('kontainer')<!-- kodenya tulis disini -->
<div class="kontainer">
    <div class="card-header">
        <h2>Daftar ODP</h2>
        <form class="d-flex" role="search" Action="{{url('/odp/search ')}}">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="Cari">
            <button class="btn btn-outline-success" type="submit" >Search</button>
        </form>
    </div>
</div>
<br>
<div class="kontainer">
<div style="position: relative; top: 20px">
    <a href="{{url('/odp/create')}}">
        <button type="button" class="btn btn-success" style="position: relative; left: 30px">Tambah</button>
    </a>
    <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID ODP</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item) 
                    <!-- $item==odc_id -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$item->nama_odp}}</td>
                            <td>{{$item->lokasi}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a href="{{url('/odp/'.$item->odp_id)}}" style="margin-left: 10px;"><button type="button" class="btn btn-primary">Lihat</button></a>
                                <a href="{{url('/odp/'.$item->odp_id.'/edit')}}" style="margin-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
    </table> 
    {{ $data->links() }}
</div>
</div>
@endsection