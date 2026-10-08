<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - My Personal Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">

        @include('layouts.header')

        <h2>Selamat Datang</h2>
        <p>Halo! Saya <strong>Tegar Tri Wibowo</strong>, mahasiswa Teknik Informatika di Universitas Sains Al-Qur'an.</p>

        <div class="beranda-intro">
            <p>Website ini merupakan portofolio pribadi saya. Silakan jelajahi halaman-halaman di atas untuk mengetahui lebih lanjut tentang data diri, aktivitas, dan cara menghubungi saya.</p>
        </div>

        @include('layouts.footer')

    </div>
</body>
</html>
