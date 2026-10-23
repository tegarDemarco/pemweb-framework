<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Aktivitas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.header')
    
    <div class="container">
        <h2>Tambah Aktivitas</h2>
        <form action="{{ route('aktivitas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_aktivitas">Nama Aktivitas</label>
                <input type="text" id="nama_aktivitas" name="nama_aktivitas" placeholder="Nama aktivitas">
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Deskripsi aktivitas"></textarea>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal aktivitas">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" id="status" name="status" value="1"> 
            </div>

            <button type="submit" class="btn-submit">Tambah</button>
            <a href="{{ route('aktivitas') }}" class="btn-batal">Batal</a>
        </form>
    </div>
    
</body>
</html>