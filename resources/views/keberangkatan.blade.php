<!DOCTYPE html>
<html>
<head>
    <title>Assurance Update</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    
    <a href="{{ url('/assurance/'.$time->teknisi_id) }}"><button type="button">back</button></a>

    <form action="{{ url('/assurance/update/'.$time->id) }}" method="post">
        @csrf
        @method('put')
        <button type="submit" name="teknisi_berangkat">Teknisi Berangkat</button>
        <button type="submit" name="teknisi_tiba">Teknisi Tiba</button>
        <a href="{{ url('/tindakan/'.$time->id) }}">
            <button type="button">Tindakan</button>
        </a>
        <button type="submit" name="tech_closed">tech closed</button>
    </form>

    
</body>
</html>