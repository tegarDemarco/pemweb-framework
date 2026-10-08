<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri - My Personal Website</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">

        @include('layouts.header')

        <h2>Data Diri</h2>

        <img class="foto-profil"
             src="https://media.licdn.com/dms/image/v2/D5603AQG3bTJG5gT2PQ/profile-displayphoto-shrink_800_800/B56Z1yWeV3JgAc-/0/1775739989364?e=1792627200&v=beta&t=mfF0ttL4zY3HeunbpBx3Co0DFRMoc4GrmEzfn6LM488"
             alt="Foto Profil Tegar">

        <table>
            <tr>
                <td>Nama</td>
                <td>Tegar</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>2024150042</td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>Teknik Informatika</td>
            </tr>
            <tr>
                <td>Universitas</td>
                <td>Universitas Sains Al-Qur'an</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>tegar@unsiq.ac.id</td>
            </tr>
        </table>

        @include('layouts.footer')

    </div>
</body>
</html>