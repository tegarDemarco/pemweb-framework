<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <h2>Detail Aktivitas</h2>
        <p><strong>Nama Aktivitas:</strong> {{ $aktivitas->nama_aktivitas }}</p>
        <p><strong>Deskripsi:</strong> {{ $aktivitas->deskripsi }}</p>
        <p><strong>Tanggal:</strong> {{ $aktivitas->tanggal }}</p>
        <p><strong>Status:</strong> {{ $aktivitas->status ? 'Selesai' : 'Belum Selesai' }}</p>
    </div>

    @include('layouts.footer')
</body>