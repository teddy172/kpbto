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
                        <th scope="col">ODP</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($data as $item) 
                    <!-- $item==odc_id -->
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$item->nama_odc}}</td>
                            <td>{{$item->lokasi_odc}}</td>
                            <td>
                                {{$item->nama_odp}}
                            </td>
                            <td>{{$item->status_odc}}</td>
                            <td>
                                <a href="{{url('/odc/'.$item->dc_id)}}" style="margin-left: 10px;"><button type="button" class="btn btn-primary">Lihat</button></a>
                                <a href="{{url('/odc/'.$item->dc_id.'/edit')}}" style="margin-left: 10px;"><button type="button" class="btn btn-warning">Edit</button></a>
                                
                            </td>
                    </tr>
                    @endforeach
                </tbody>
    </table> 
    {{ $data->links() }}
</div>
</div>
@endsection