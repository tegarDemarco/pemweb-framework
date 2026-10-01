<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kontak - My Personal Website</title>
</head>
<body>

    @include('layouts.header')

    <h2>Kontak</h2>
    <p>Silakan hubungi saya melalui informasi berikut:</p>

    <ul>
        <li><b>Email</b> : tegar@unsiq.ac.id</li>
        <li><b>No. HP</b> : 08123456789</li>
        <li><b>Instagram</b> : <a href="https://www.instagram.com/gartriwi_/">gartriwi_</a></li>
        <li><b>LinkedIn</b> : <a href="https://www.linkedin.com/in/tegar-tri-a53555353">Tegar Tri</a></li>
    </ul>

    <br>
    <h3>Kirim Pesan</h3>
    <form method="POST" action="#">
        <label>Nama:</label><br>
        <input type="text" name="nama" placeholder="Nama Anda"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Email Anda"><br><br>

        <label>Pesan:</label><br>
        <textarea name="pesan" rows="4" cols="40" placeholder="Tulis pesan Anda..."></textarea><br><br>

        <input type="submit" value="Kirim Pesan">
    </form>

    @include('layouts.footer')

</body>
</html>