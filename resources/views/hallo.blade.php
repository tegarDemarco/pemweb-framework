<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pengantar Laravel</title>
	<style>
		* { box-sizing: border-box; }
		body { margin: 0; background: #f4f6f8; color: #263238; font: 16px/1.7 Arial, sans-serif; }
		header { padding: 64px 20px; text-align: center; color: #fff; background: #b4232f; }
		header h1 { margin: 0 0 12px; font-size: clamp(2rem, 6vw, 3.2rem); }
		header p { max-width: 680px; margin: auto; }
		main { width: min(900px, calc(100% - 32px)); margin: 32px auto; }
		section { margin: 18px 0; padding: 24px; background: #fff; border-radius: 10px; box-shadow: 0 3px 14px #172b4d12; }
		h2 { margin-top: 0; color: #a51d2d; }
		code { padding: 3px 6px; border-radius: 4px; background: #fcebed; color: #8d1825; }
		footer { padding: 20px; text-align: center; color: #64748b; }
	</style>
</head>

<body>
	<header>
		<h1>Pengantar Laravel</h1>
		<p>Mulai mengenal framework PHP untuk membangun aplikasi web yang rapi, aman, dan mudah dikembangkan.</p>
	</header>

	<main>
		<section>
			<h2>Apa itu Laravel?</h2>
			<p>Laravel adalah framework PHP open-source yang menyediakan struktur dan berbagai fitur siap pakai untuk pengembangan aplikasi web. Laravel menerapkan pola MVC (Model-View-Controller) agar logika aplikasi, data, dan tampilan lebih terorganisasi.</p>
		</section>

		<section>
			<h2>Fitur utama</h2>
			<ul>
				<li><strong>Routing:</strong> mengatur alamat URL dan aksi yang dijalankan.</li>
				<li><strong>Controller:</strong> mengelola alur logika aplikasi.</li>
				<li><strong>Eloquent ORM:</strong> berinteraksi dengan database menggunakan model.</li>
				<li><strong>Blade:</strong> menyusun halaman dinamis dengan template yang dapat digunakan kembali.</li>
			</ul>
		</section>

		<section>
			<h2>Berkenalan dengan Blade</h2>
			<p>Template Blade disimpan dengan ekstensi <code>.blade.php</code>. Untuk menampilkan nilai variabel yang telah dikirim dari route atau controller, gunakan sintaks:</p>
			<p><code>@{{ $name }}</code></p>
			<p>Blade juga menyediakan direktif untuk membuat tampilan berdasarkan kondisi atau data.</p>
		
            <pre>
                Halo, {{ $name }};
                @if($status)
                    status aktif.;
                @else
                    status tidak aktif.;
                    
                @endif
            </pre>

        </section>

		<section>
			<h2>Langkah awal</h2>
			<p>Pelajari alur sederhana Laravel: buat route, siapkan data di controller, lalu tampilkan data tersebut melalui view Blade. Setelah itu, Anda dapat melanjutkan ke database dan autentikasi.</p>
		</section>
	</main>

	<footer>&copy; {{ date('Y') }} · Pengantar Laravel</footer>
</body>
</html>
