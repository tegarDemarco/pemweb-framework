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
        </form>
        </ul>

        <div>
            <a href="{{ route('hubungi') }}" class="btn-submit">
                hubungi</a>

        </div>
    </div>
</body>
</html>