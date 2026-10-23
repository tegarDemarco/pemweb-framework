<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <form method="POST" action="#">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama anda">
            </div>

            <div class="form-group">
                <label for="pesan">Isi pesan</label>
                <textarea id="isi pesan" name="pesan" rows="4" placeholder="isi pesan"></textarea>
            </div>
            <input type="submit" value="kirim pesan" class="btn-submit">
            <a href="{{ route('kontak') }}" class="btn-batal">
                batal kirim</a>
        </form>

        
</body>
</html>