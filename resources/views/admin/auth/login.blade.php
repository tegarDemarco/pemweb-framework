<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1>LOGIN</h1>

        @if ($errors->any())
            <div class="alert-error">
                <span class="alert-error-icon">&#9888;</span>
                <span class="alert-error-msg">{{ $errors->first() }}</span>
            </div>
        @endif
        <form action="{{ route('admin.login.submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn-submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>