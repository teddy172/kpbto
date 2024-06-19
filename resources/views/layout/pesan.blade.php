@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
@endif