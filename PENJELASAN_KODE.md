# PENJELASAN KODE — Website Portofolio Laravel

**Nama   :** Tegar Tri Wibowo
**NIM    :** 2024150042
**Prodi  :** Teknik Informatika — Universitas Sains Al-Qur'an

---

## DAFTAR ISI

1. [Struktur Folder](#1-struktur-folder)
2. [app/Http/Controllers](#2-apphttpcontrollers)
3. [public/css/style.css](#3-publiccssstylecss)
4. [resources/views/layouts](#4-resourcesviewslayouts)
5. [resources/views (Halaman Utama)](#5-resourcesviews-halaman-utama)

---

## 1. Struktur Folder

```
tegar-laravel/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Controller.php          <- Controller induk (base)
│           ├── berandaController.php   <- Controller halaman beranda
│           ├── datadiriController.php  <- Controller halaman data diri
│           ├── aktivitasController.php <- Controller halaman aktivitas
│           ├── kontakController.php    <- Controller halaman kontak
│           ├── halloController.php     <- Controller dengan data variabel
│           └── profileController.php   <- Controller dengan data variabel
├── public/
│   └── css/
│       └── style.css                  <- File CSS tampilan website
└── resources/
    └── views/
        ├── layouts/
        │   ├── header.blade.php        <- Komponen header (dipakai semua halaman)
        │   └── footer.blade.php        <- Komponen footer (dipakai semua halaman)
        ├── beranda.blade.php           <- Halaman beranda
        ├── datadiri.blade.php          <- Halaman data diri
        ├── aktivitas.blade.php         <- Halaman aktivitas & sertifikat
        └── kontak.blade.php            <- Halaman kontak & form pesan
```

### Pola MVC di Laravel

Laravel menggunakan pola arsitektur **MVC (Model - View - Controller)**:

| Komponen | Folder | Fungsi |
|----------|--------|--------|
| **Model** | `app/Models/` | Mengurus data dari database (tidak dipakai di proyek ini) |
| **View** | `resources/views/` | File tampilan HTML yang dilihat pengguna |
| **Controller** | `app/Http/Controllers/` | Jembatan antara URL dan View |

**Alur kerja:**
```
Browser --> URL --> routes/web.php --> Controller --> View --> Browser
```

---

## 2. app/Http/Controllers

### 2.1 Controller.php (Base Controller / Controller Induk)

```php
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
```

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 1 | `<?php` | Penanda bahwa file ini adalah file PHP |
| 3 | `namespace App\Http\Controllers;` | Mendaftarkan file ke "ruang nama" (namespace) Controllers, agar bisa dipanggil oleh file lain di lokasi berbeda |
| 5 | `abstract class Controller` | Mendefinisikan kelas abstrak bernama `Controller`. Abstrak artinya kelas ini **tidak bisa dibuat objeknya langsung**, hanya bisa diwarisi oleh kelas lain |

**Fungsi file ini:**
Ini adalah **controller induk (parent)** bawaan Laravel. Semua controller lain harus mewarisi (`extends`) kelas ini agar mendapatkan fitur bawaan Laravel.

---

### 2.2 berandaController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
}
```

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 3 | `namespace App\Http\Controllers;` | Mendaftarkan file ke ruang nama Controllers |
| 5 | `use Illuminate\Http\Request;` | Mengimpor kelas `Request` dari Laravel (berguna jika ingin membaca data dari form atau URL) |
| 7 | `class berandaController extends Controller` | Membuat kelas controller baru yang **mewarisi** base Controller |
| 9 | `public function index()` | Membuat fungsi bernama `index`. Kata `public` berarti fungsi ini bisa diakses dari luar kelas |
| 11 | `return view('beranda');` | Mengirimkan file tampilan `beranda.blade.php` ke browser pengguna |

**Fungsi file ini:**
Ketika pengguna membuka URL `/` (halaman utama), `routes/web.php` meneruskan ke fungsi `index()` di sini, lalu halaman `beranda.blade.php` ditampilkan.

---

### 2.3 datadiriController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datadiriController extends Controller
{
    public function index()
    {
        return view('datadiri');
    }
}
```

**Fungsi file ini:**
Sama dengan `berandaController`, namun untuk halaman `/datadiri`. Ketika URL `/datadiri` dibuka, halaman `datadiri.blade.php` ditampilkan.

---

### 2.4 aktivitasController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aktivitasController extends Controller
{
    public function index()
    {
        return view('aktivitas');
    }
}
```

**Fungsi file ini:**
Menampilkan halaman `aktivitas.blade.php` ketika URL `/aktivitas` dibuka.

---

### 2.5 kontakController.php

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }
}
```

**Fungsi file ini:**
Menampilkan halaman `kontak.blade.php` ketika URL `/kontak` dibuka.

---

### 2.6 halloController.php (Controller dengan Data)

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halloController extends Controller
{
    public function index()
    {
        $name   = "Tegar";
        $age    = 21;
        $status = true;
        $bio    = "lorem ipsum dolor sit amet, consectetur adipiscing elit...";
        return view('hallo', compact('name', 'age', 'bio', 'status'));
    }
}
```

| Baris | Kode | Penjelasan |
|-------|------|-----------|
| 11 | `$name = "Tegar";` | Membuat variabel `$name` berisi nilai teks (string) "Tegar" |
| 12 | `$age = 21;` | Membuat variabel `$age` berisi nilai angka (integer) 21 |
| 13 | `$status = true;` | Membuat variabel `$status` berisi nilai benar/salah (boolean) |
| 14 | `$bio = "lorem ipsum...";` | Membuat variabel `$bio` berisi teks panjang |
| 15 | `return view('hallo', compact(...))` | Mengirim tampilan `hallo.blade.php` beserta semua variabel di atas |

**Apa itu `compact()`?**
Fungsi `compact('name', 'age', 'bio', 'status')` mengemas beberapa variabel menjadi satu array, lalu dikirim ke View. Di dalam file blade, variabel tersebut bisa dipakai langsung:
```html
{{ $name }}   <!-- menampilkan: Tegar -->
{{ $age }}    <!-- menampilkan: 21    -->
```

**Fungsi file ini:**
Menampilkan halaman `hallo.blade.php` beserta data variabel yang telah disiapkan.

---

### 2.7 profileController.php (Controller dengan Data)

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function index()
    {
        $name = "Tegar";
        $age  = 21;
        $bio  = "lorem ipsum dolor sit amet, consectetur adipiscing elit...";
        return view('profile', compact('name', 'age', 'bio'));
    }
}
```

**Fungsi file ini:**
Mirip dengan `halloController`, namun mengirim data `$name`, `$age`, dan `$bio` ke halaman `profile.blade.php`.

---

### Perbedaan Controller Biasa vs Controller dengan Data

| Jenis | Contoh | Cara kirim ke View |
|-------|--------|--------------------|
| Controller biasa | beranda, datadiri, aktivitas, kontak | `return view('nama_view');` |
| Controller dengan data | hallo, profile | `return view('nama_view', compact('var1', 'var2'));` |

---

## 3. public/css/style.css

File CSS ini mengatur **seluruh tampilan visual** website. Disimpan di folder `public/` agar dapat diakses langsung oleh browser tanpa melalui Laravel.

File ini dipanggil di setiap halaman blade dengan kode:
```html
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
```
Fungsi `asset()` dari Laravel secara otomatis menghasilkan URL lengkap menuju folder `public/`, sehingga tidak perlu menulis path secara manual.

---

### 3.1 Global Reset & Base — Gaya Dasar Seluruh Halaman

```css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
```

| Properti | Nilai | Penjelasan |
|----------|-------|-----------|
| `*` | (selector) | Berlaku untuk **semua elemen HTML** di halaman |
| `margin` | `0` | Menghapus jarak luar (margin) bawaan dari browser |
| `padding` | `0` | Menghapus jarak dalam (padding) bawaan dari browser |
| `box-sizing` | `border-box` | Lebar elemen sudah termasuk padding dan border — lebih mudah dihitung |

```css
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f6f9;
    color: #333;
    font-size: 16px;
    line-height: 1.6;
}
```

| Properti | Nilai | Penjelasan |
|----------|-------|-----------|
| `font-family` | `'Segoe UI', ...` | Jenis huruf yang digunakan. Browser mencoba dari kiri, jika tidak tersedia pakai yang berikutnya |
| `background-color` | `#f4f6f9` | Warna latar belakang halaman: abu-abu muda kebiruan |
| `color` | `#333` | Warna teks default: abu-abu gelap (lebih lembut dari hitam penuh `#000`) |
| `font-size` | `16px` | Ukuran huruf dasar |
| `line-height` | `1.6` | Jarak antar baris teks = 1,6 kali ukuran huruf, agar mudah dibaca |

---

### 3.2 Container — Pembungkus Konten Halaman

```css
.container {
    max-width: 800px;
    margin: 40px auto;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    padding: 40px;
}
```

| Properti | Nilai | Penjelasan |
|----------|-------|-----------|
| `max-width` | `800px` | Lebar maksimal konten. Tidak akan lebih lebar dari 800px meski layar lebih besar |
| `margin` | `40px auto` | Atas-bawah: 40px. Kiri-kanan: `auto` = **konten otomatis terpusat di tengah layar** |
| `background-color` | `#ffffff` | Latar konten: putih, kontras dengan latar halaman yang abu-abu |
| `border-radius` | `8px` | Sudut kotak sedikit membulat, tidak terkesan kaku |
| `box-shadow` | `0 2px 10px rgba(0,0,0,0.08)` | Bayangan tipis di bawah kotak, menciptakan kesan "kartu" (card effect) yang modern |
| `padding` | `40px` | Jarak antara tepi kotak dan isi di dalamnya: 40px di semua sisi |

---

### 3.3 Header & Navigasi

```css
header {
    text-align: center;
    margin-bottom: 24px;
}
```

Elemen `<header>` di dalam container ditampilkan rata tengah dengan jarak bawah 24px.

```css
header h1 {
    font-size: 26px;
    font-weight: 700;
    color: #1a1a2e;
    letter-spacing: 1px;
    margin-bottom: 16px;
}
```

| Properti | Nilai | Penjelasan |
|----------|-------|-----------|
| `font-size` | `26px` | Ukuran judul website |
| `font-weight` | `700` | Teks tebal (sama dengan `bold`) |
| `color` | `#1a1a2e` | Warna biru tua gelap — ini warna utama (accent color) seluruh website |
| `letter-spacing` | `1px` | Jarak antar huruf sedikit melebar, memberi kesan elegan |

```css
nav {
    display: flex;
    justify-content: center;
    gap: 8px;
    flex-wrap: wrap;
}
```

| Properti | Nilai | Penjelasan |
|----------|-------|-----------|
| `display: flex` | — | Mengaktifkan **Flexbox** — item di dalam nav ditata secara horizontal |
| `justify-content` | `center` | Semua item nav rata tengah secara horizontal |
| `gap` | `8px` | Jarak antar setiap tombol navigasi: 8px |
| `flex-wrap` | `wrap` | Jika layar terlalu sempit, tombol nav turun ke baris baru secara otomatis (responsif) |

```css
nav a {
    text-decoration: none;
    color: #555;
    font-size: 14px;
    font-weight: 500;
    padding: 6px 16px;
    border-radius: 20px;
    border: 1px solid #ddd;
    transition: all 0.2s ease;
}

nav a:hover {
    background-color: #1a1a2e;
    color: #ffffff;
    border-color: #1a1a2e;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `text-decoration: none` | Menghilangkan garis bawah bawaan pada tag `<a>` (link) |
| `padding: 6px 16px` | Jarak dalam tombol: 6px atas-bawah, 16px kiri-kanan |
| `border-radius: 20px` | Sudut sangat membulat — menciptakan bentuk "pill" (kapsul) |
| `border: 1px solid #ddd` | Garis tipis di sekeliling tombol nav |
| `transition: all 0.2s ease` | Animasi halus selama 0,2 detik saat terjadi perubahan (hover) |
| `nav a:hover` | Gaya yang aktif saat kursor mouse diarahkan ke tombol nav |

---

### 3.4 Judul Halaman (h2)

```css
h2 {
    font-size: 20px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 10px;
    padding-bottom: 6px;
    border-left: 4px solid #1a1a2e;
    padding-left: 12px;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `border-left: 4px solid #1a1a2e` | Garis vertikal tebal 4px di sisi kiri judul — aksen visual penanda judul |
| `padding-left: 12px` | Jarak antara garis kiri dan teks judul |

---

### 3.5 Foto Profil (.foto-profil)

```css
.foto-profil {
    display: block;
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid #1a1a2e;
    margin: 0 0 20px 0;
}
```

| Properti | Nilai | Penjelasan |
|----------|-------|-----------|
| `display: block` | — | Foto ditampilkan sebagai blok — gambar berada di baris sendiri |
| `width` & `height` | `130px` | Ukuran foto dipaksa menjadi 130x130 piksel (berbentuk kotak) |
| `object-fit` | `cover` | Foto dipotong otomatis agar pas di kotak tanpa berubah proporsi (tidak gepeng) |
| `border-radius` | `50%` | Sudut membulat penuh (50% dari 130px) — foto berubah menjadi **lingkaran** |
| `border` | `3px solid #1a1a2e` | Bingkai foto setebal 3px warna biru tua |

---

### 3.6 Tabel Data Diri

```css
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 8px;
}

table td {
    padding: 10px 14px;
    border: 1px solid #e0e0e0;
    font-size: 15px;
    vertical-align: top;
}

table tr:nth-child(even) td {
    background-color: #f9f9f9;
}

table td:first-child {
    font-weight: 600;
    color: #1a1a2e;
    width: 35%;
    background-color: #f0f2f8;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `width: 100%` | Tabel melebar penuh mengisi container |
| `border-collapse: collapse` | Garis antar sel digabung menjadi satu, tidak terjadi garis dobel |
| `tr:nth-child(even)` | **CSS Selector** — memilih baris ke-2, 4, 6, dst. (baris genap) untuk diberi warna berbeda. Efek ini disebut **zebra stripe** |
| `td:first-child` | Memilih kolom pertama setiap baris (kolom label seperti "Nama", "NIM"). Diberi warna biru muda dan tebal |
| `vertical-align: top` | Teks di dalam sel rata atas (berguna jika ada sel yang panjang) |

---

### 3.7 Daftar (ul dan li) — Halaman Aktivitas

```css
ul {
    padding-left: 20px;
    margin-bottom: 16px;
}

ul li {
    margin-bottom: 8px;
    color: #444;
    padding: 2px 0;
}

ul li a {
    color: #1a1a2e;
    font-weight: 500;
    text-decoration: none;
    border-bottom: 1px solid #aaa;
    transition: color 0.2s;
}

ul li a:hover {
    color: #555;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `padding-left: 20px` | Jarak kiri agar bullet point tidak menempel ke tepi |
| `margin-bottom: 8px` | Jarak antar setiap item list |
| `border-bottom: 1px solid #aaa` | Link sertifikat diberi garis bawah tipis sebagai penanda link |

---

### 3.8 Daftar Kontak (.kontak-info)

```css
.kontak-info {
    list-style: none;
    padding-left: 0;
    margin-bottom: 20px;
}

.kontak-info li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
    font-size: 15px;
}

.kontak-info li:last-child {
    border-bottom: none;
}

.kontak-info li b {
    color: #1a1a2e;
    display: inline-block;
    width: 90px;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `list-style: none` | Menghilangkan bullet point (titik/angka) bawaan dari `<ul>` |
| `padding-left: 0` | Menghilangkan indentasi bawaan daftar |
| `border-bottom: 1px solid #eee` | Garis pemisah antar item kontak |
| `li:last-child` | Selector item terakhir — garisnya dihilangkan agar tidak ada garis di paling bawah |
| `width: 90px` pada `<b>` | Label (Email, No. HP, dll.) memiliki lebar tetap, sehingga nilai kontak terlihat sejajar |

---

### 3.9 Form Kontak

```css
.form-group {
    margin-bottom: 16px;
}

.form-group label {
    display: block;
    font-weight: 600;
    font-size: 14px;
    color: #333;
    margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 15px;
    font-family: inherit;
    color: #333;
    background-color: #fafafa;
    transition: border-color 0.2s;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #1a1a2e;
    background-color: #fff;
}

.btn-submit {
    background-color: #1a1a2e;
    color: #ffffff;
    padding: 10px 28px;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-submit:hover {
    background-color: #333;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `.form-group` | Pembungkus setiap pasangan label + input, memberi jarak antar elemen form |
| `display: block` pada label | Label tampil di baris sendiri, bukan di sebelah input |
| `width: 100%` pada input | Input melebar penuh mengisi container |
| `font-family: inherit` | Input menggunakan font yang sama dengan body (bukan font bawaan browser) |
| `:focus` | Pseudo-class yang aktif saat elemen sedang diklik/diketik oleh pengguna |
| `outline: none` | Menghilangkan garis fokus kotak bawaan browser, diganti dengan `border-color` |
| `cursor: pointer` | Kursor berubah menjadi ikon tangan saat diarahkan ke tombol submit |

---

### 3.10 Footer CSS

```css
footer {
    text-align: center;
    margin-top: 32px;
    padding-top: 16px;
    border-top: 1px solid #e8e8e8;
    font-size: 13px;
    color: #888;
}
```

| Properti | Penjelasan |
|----------|-----------|
| `border-top` | Garis pemisah tipis di atas footer |
| `color: #888` | Warna abu-abu terang — teks footer tidak terlalu mencolok dibanding konten utama |

---

## 4. resources/views/layouts

Folder `layouts/` berisi **komponen yang dipakai berulang** di banyak halaman. Tujuannya agar kode tidak ditulis berulang — cukup tulis sekali, pakai di mana saja.

Di Laravel Blade, komponen ini dipanggil dengan:
```php
@include('layouts.namafile')
```

---

### 4.1 header.blade.php

```html
<header>
    <h1>My Personal Website</h1>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a>
        <a href="{{ route('datadiri') }}">Data Diri</a>
        <a href="{{ route('aktivitas') }}">Aktivitas</a>
        <a href="{{ route('kontak') }}">Kontak</a>
    </nav>
</header>

<hr class="divider">
```

**Penjelasan baris per baris:**

| Elemen / Kode | Penjelasan |
|---------------|-----------|
| `<header>` | Tag HTML5 semantik untuk bagian kepala/judul halaman |
| `<h1>My Personal Website</h1>` | Judul utama website. Dalam standar HTML, hanya boleh ada satu `<h1>` per halaman |
| `<nav>` | Tag HTML5 semantik khusus untuk navigasi |
| `{{ route('beranda') }}` | **Sintaks Blade Laravel** — Tanda kurung kurawal ganda `{{ }}` digunakan untuk mencetak nilai. Fungsi `route('beranda')` menghasilkan URL berdasarkan nama route yang sudah didaftarkan di `routes/web.php` |
| `<hr class="divider">` | Garis horizontal pemisah antara header dan konten halaman. Class `divider` diatur tampilannya di CSS |

**Kenapa pakai `route('beranda')` bukan langsung tulis `/`?**
Jika suatu saat URL diubah di `web.php`, semua link yang menggunakan `route()` akan otomatis mengikuti perubahan tersebut. Tidak perlu mengubah satu per satu di setiap file.

**Cara memasang di halaman lain:**
```php
@include('layouts.header')
```
Directive `@include` menyisipkan seluruh isi file `header.blade.php` tepat di posisi baris tersebut.

---

### 4.2 footer.blade.php

```html
<footer>
    <p>&copy; 2026 Tegar Tri Wibowo - 2024150042</p>
</footer>
```

**Penjelasan baris per baris:**

| Elemen / Kode | Penjelasan |
|---------------|-----------|
| `<footer>` | Tag HTML5 semantik untuk bagian bawah (kaki) halaman |
| `&copy;` | **HTML Entity** — kode khusus untuk menampilkan simbol hak cipta © |
| Isi teks | Menampilkan nama dan NIM pembuat website |

**Cara memasang di halaman lain:**
```php
@include('layouts.footer')
```

---

## 5. resources/views (Halaman Utama)

### 5.1 beranda.blade.php

```html
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
        <p>Halo! Saya <strong>Tegar Tri Wibowo</strong>, mahasiswa Teknik Informatika...</p>

        <div class="beranda-intro">
            <p>Website ini merupakan portofolio pribadi saya...</p>
        </div>

        @include('layouts.footer')

    </div>
</body>
</html>
```

| Elemen / Kode | Penjelasan |
|---------------|-----------|
| `<!DOCTYPE html>` | Deklarasi bahwa dokumen ini adalah HTML versi 5 |
| `<html lang="id">` | Tag pembuka HTML dengan atribut bahasa Indonesia (`id`) |
| `<meta charset="UTF-8">` | Mengatur encoding karakter agar huruf seperti á, é, dan karakter khusus tampil dengan benar |
| `<meta name="viewport" ...>` | Membuat halaman responsif di perangkat mobile |
| `<title>` | Judul yang tampil di tab browser |
| `{{ asset('css/style.css') }}` | Fungsi Blade untuk menghasilkan URL ke file `public/css/style.css` |
| `<div class="container">` | Pembungkus semua konten. Class `container` diatur di CSS untuk memusatkan dan memberi tampilan kartu |
| `@include('layouts.header')` | Menyisipkan file `header.blade.php` |
| `<strong>` | Menebalkan teks di dalamnya |
| `<div class="beranda-intro">` | Kotak intro beranda dengan gaya khusus dari CSS |
| `@include('layouts.footer')` | Menyisipkan file `footer.blade.php` |

---

### 5.2 datadiri.blade.php

```html
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
             src="https://media.licdn.com/..."
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
            ...
        </table>

        @include('layouts.footer')
    </div>
</body>
</html>
```

| Elemen / Kode | Penjelasan |
|---------------|-----------|
| `<img class="foto-profil" src="..." alt="...">` | Menampilkan gambar profil dari URL. Class `foto-profil` membuat gambar berbentuk lingkaran (lihat CSS). Atribut `alt` adalah teks alternatif jika gambar gagal dimuat |
| `<table>` | Membuat tabel untuk menampilkan data diri secara terstruktur |
| `<tr>` | Table Row — satu baris dalam tabel |
| `<td>` | Table Data — satu sel dalam baris tabel |

---

### 5.3 aktivitas.blade.php

```html
...
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
    <li><b>Dicoding Indonesia</b> :
        <a href="https://www.dicoding.com/certificates/..." target="_blank">
            Prompt Engineering untuk Software Developer
        </a>
    </li>
    ...
</ul>
```

| Elemen / Kode | Penjelasan |
|---------------|-----------|
| `<ul>` | Unordered List — daftar tidak berurutan (berupa bullet point) |
| `<li>` | List Item — satu item dalam daftar |
| `<b>` | Menebalkan teks (bold) tanpa makna semantik khusus |
| `<a href="..." target="_blank">` | Link yang membuka halaman baru di tab berbeda (`target="_blank"`) |

---

### 5.4 kontak.blade.php

```html
...
<h2>Kontak</h2>

<ul class="kontak-info">
    <li><b>Email</b> : tegar@unsiq.ac.id</li>
    <li><b>No. HP</b> : 08123456789</li>
    <li><b>Instagram</b> : <a href="https://www.instagram.com/gartriwi_/">gartriwi_</a></li>
    <li><b>LinkedIn</b> : <a href="https://www.linkedin.com/in/tegar-tri-a53555353">Tegar Tri</a></li>
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
```

| Elemen / Kode | Penjelasan |
|---------------|-----------|
| `<ul class="kontak-info">` | Daftar kontak tanpa bullet (diatur oleh CSS class `kontak-info`) |
| `<form method="POST" action="#">` | Form yang mengirim data menggunakan metode POST. Simbol `#` berarti belum ada URL tujuan pengiriman |
| `@csrf` | **Directive Blade khusus keamanan** — menghasilkan token tersembunyi di dalam form untuk mencegah serangan CSRF (Cross-Site Request Forgery). Wajib ada di setiap form POST di Laravel |
| `<label for="nama">` | Label untuk input. Atribut `for` harus sama dengan `id` input-nya agar saat label diklik, kursor masuk ke input |
| `<input type="text">` | Kolom isian satu baris untuk teks biasa |
| `<input type="email">` | Kolom isian khusus email — browser akan validasi format email secara otomatis |
| `<textarea>` | Kolom isian banyak baris (untuk pesan panjang) |
| `placeholder="..."` | Teks petunjuk yang muncul di dalam input sebelum pengguna mengetik |
| `<input type="submit">` | Tombol untuk mengirim form |
| `class="btn-submit"` | Menghubungkan tombol dengan gaya CSS class `.btn-submit` |

---

## RANGKUMAN ALUR KERJA LENGKAP

```
[1] Pengguna mengetik URL di browser
         |
         v
[2] routes/web.php mencocokkan URL dengan Controller
    Contoh: Route::get('/kontak', [KontakController::class, 'index'])
         |
         v
[3] Controller dipanggil (contoh: kontakController.php)
    Fungsi index() dijalankan
         |
         v
[4] Controller mengembalikan View
    return view('kontak');
         |
         v
[5] Laravel memproses kontak.blade.php:
    - @include('layouts.header') -> menyisipkan header.blade.php
    - Konten halaman (form, daftar, dll.)
    - @include('layouts.footer') -> menyisipkan footer.blade.php
    - {{ asset('css/style.css') }} -> menghasilkan link ke style.css
         |
         v
[6] HTML lengkap dikirim ke browser pengguna
         |
         v
[7] Browser membaca style.css dari public/css/style.css
    dan menerapkan tampilan ke halaman
```

---

*Dokumen ini dibuat sebagai referensi penjelasan kode website portofolio Laravel.*
*Tegar Tri Wibowo — 2024150042 — Teknik Informatika UNSIQ — 2026*
