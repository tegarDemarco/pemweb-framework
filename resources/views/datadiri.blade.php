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
             src="https://instagram.fsrg6-1.fna.fbcdn.net/v/t51.82787-19/556141002_18081447401308076_2009645509124057665_n.jpg?_nc_cat=106&_nc_map=urlgen_bucketless&ig_cache_key=GMoJJiGsP2EJ_zxAAEFqzGfxseMbbmNDAQAB0j-ccb7-5&ccb=7-5&_nc_sid=669407&efg=eyJ2ZW5jb2RlX3RhZyI6InByb2ZpbGVfcGljLnd3dy4xMDgwLkMzIn0%3D&_nc_ohc=887Vr55aqpkQ7kNvwFyieso&_nc_oc=AdoJt5avFQGDTeT3FrzJcH_hwdwh_I7oCS_SXTkVSXqlV9kekBajq2dbd68T_GwZsK0&_nc_zt=24&_nc_ht=instagram.fsrg6-1.fna&_nc_gid=z5EExBYwyvhWsNbVpfnc-A&_nc_ss=7b6a8&oh=00_AQPebK3VdENo8UPtl-M14ZjEcZmPCgUDmuqlaUtzHT7UDg&oe=6ADF4894"
             alt="Foto Profil Tegar">

        <table>
            <tr>
                <td>Nama</td>
                <td>Tegar Tri Wibowo</td>
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