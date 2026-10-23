<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <h2>Edit Aktivitas</h2>
        <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_aktivitas">Nama Aktivitas</label>
                <input type="text" id="nama_aktivitas" name="nama_aktivitas" value="{{ $aktivitas->nama_aktivitas }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" id="deskripsi" name="deskripsi" value="{{ $aktivitas->deskripsi }}">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" value="{{ $aktivitas->tanggal->format('Y-m-d') }}"required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" id="status" name="status" value="1"{{ $aktivitas->status ? 'checked' : '' }}>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn-submit">Simpan</button>
                <a href="{{ route('aktivitas') }}" class="btn-batal">Batal</a>
            </div>
        </form>
    </div>

    @include('layouts.footer')
    
</body>
</html>