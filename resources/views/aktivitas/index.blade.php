<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.header')
    
    <div class="container">
        <h2>Daftar Aktivitas</h2>
        <a href="{{ route('aktivitas.create') }}" class="btn btn-submit">+ Tambah Aktivitas</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_aktivitas }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->tanggal->format('d-m-Y') }}</td>
                    <td>{{ $item->status ? 'Selesai' : 'Belum Selesai' }}</td>
                    <td>
                        <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn-submit">Edit</a>
                        <a href="{{ route('aktivitas.show', $item->id) }}" class="btn-submit">View</a>
                        <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-batal">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

      
    </div>
</body>
</html>