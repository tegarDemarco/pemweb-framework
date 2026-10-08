<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - My Personal Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">

        @include('layouts.header')

        <h2>Kontak</h2>
        <p>Silakan hubungi saya melalui informasi berikut:</p>

        <ul class="kontak-info">
            <li><b>Email</b> : tegar@unsiq.ac.id</li>
            <li><b>No. HP</b> : 08123456789</li>
            <li><b>Instagram</b> : <a href="https://www.instagram.com/gartriwi_/" target="_blank">gartriwi_</a></li>
            <li><b>LinkedIn</b> : <a href="https://www.linkedin.com/in/tegar-tri-a53555353" target="_blank">Tegar Tri</a></li>
        </ul>

        <h3>Kirim Pesan</h3>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Anda">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email Anda">
            </div>

            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda..."></textarea>
            </div>

            <input type="submit" value="Kirim Pesan" class="btn-submit">
        </form>

        @include('layouts.footer')

    </div>
</body>
</html>