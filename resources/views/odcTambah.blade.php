@extends('layout/main')<!-- ini kode parent -->

@section('kontainer')<!-- kodenya tulis disini -->
<div class="kontainer">
    <div class="card-header">
        <h3>Penambahan ODC Baru</h3>
    </div>
</div>
<br>
<div class="kontainer">
    <form Action="{{ url('odc')}}" method="post">
        {!! csrf_field() !!}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama ODC</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Lokasi</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kordinat</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Slot</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sisa slot</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Port</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sisa port</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Status</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" value="Save" class="btn btn-outline-primary">Primary</button>
    </form>
</div>
@endsection