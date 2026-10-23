<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="admin-body">

    {{-- Navbar Card (centered, floating) --}}
    <div class="admin-navbar-wrapper">
        <div class="admin-navbar-card">
            <div class="admin-brand">Admin Panel</div>
            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="admin-nav-user">{{ Auth::user()->name }}</a>
                <a href="{{ route('admin.dashboard') }}"
                   class="admin-nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </nav>
        </div>
    </div>

    {{-- Welcome Card --}}
    <div class="admin-content-wrapper">
        <div class="admin-card">
            <h2 class="admin-card-title">Admin Dashboard</h2>
            <p class="admin-card-text">Selamat datang di dashboard admin, {{ Auth::user()->name }}!</p>
        </div>
    </div>

</body>
</html>