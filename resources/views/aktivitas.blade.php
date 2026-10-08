<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas - My Personal Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">

        @include('layouts.header')

        <h2>Aktivitas</h2>
        <p>Berikut adalah aktivitas yang pernah saya lakukan:</p>

        <ul>
            <li>Belajar pemrograman web menggunakan Laravel</li>
            <li>Mengikuti kuliah Teknologi Web di Unsiq</li>
            <li>Membuat proyek website portofolio</li>
            <li>Mengikuti seminar Artificial Intelligence di Unsiq</li>
            <li>Belajar HTML, CSS, dan JavaScript</li>
        </ul>

        <h2>Sertifikat</h2>
        <p>Berikut adalah sertifikat yang saya miliki:</p>

        <ul>
            <li><b>Dicoding Indonesia</b> : <a href="https://www.dicoding.com/certificates/1RXYWWR31ZVM" target="_blank">Prompt Engineering untuk Software Developer</a></li>
            <li><b>Dicoding Indonesia</b> : <a href="https://www.dicoding.com/certificates/72ZDJKV8VZYW" target="_blank">Belajar Dasar AI</a></li>
            <li><b>Dicoding Indonesia</b> : <a href="https://www.dicoding.com/certificates/RVZK0G6OQZD5" target="_blank">Introduction to Financial Literacy</a></li>
        </ul>

        @include('layouts.footer')

    </div>
</body>
</html>