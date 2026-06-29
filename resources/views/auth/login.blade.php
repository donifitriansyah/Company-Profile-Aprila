<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
        }

        .login-card {
            border: 0;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.25);
        }

        .login-header {
            background: rgba(255,255,255,0.12);
            color: white;
            text-align: center;
            padding: 5px;
        }

        .login-body {
            background: white;
            padding: 30px;
        }

        .btn-login {
            background: linear-gradient(135deg, #4f46e5, #06b6d4);
            border: none;
            border-radius: 10px;
        }

        .btn-login:hover {
            opacity: 0.9;
        }

        .logo {
            width: 255px;
            height: 155px;
            object-fit: contain;
            margin-bottom: 5px;
        }

        .input-group-text {
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="col-md-5">

            <div class="card login-card">

                <!-- HEADER -->
                <div class="login-header">

                    <!-- LOGO -->
                    <img src="{{ asset('frontend/assets/img/logo-aprila1.png') }}" class="logo" alt="Logo">

                </div>

                <!-- BODY -->
                <div class="login-body">

                    <h5 class="text-center mb-4">Login</h5>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email') }}"
                                   placeholder="Masukkan email"
                                   required autofocus>

                            @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- PASSWORD + TOGGLE -->
                        <div class="mb-3">
                            <label class="form-label">Password</label>

                            <div class="input-group">
                                <input type="password"
                                       name="password"
                                       id="password"
                                       class="form-control"
                                       placeholder="Masukkan password"
                                       required>

                                <span class="input-group-text" onclick="togglePassword()">
                                    <i class="bi bi-eye" id="eyeIcon"></i>
                                </span>
                            </div>

                            @error('password')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>



                        <button type="submit" class="btn btn-primary w-100 btn-login">
                            Login
                        </button>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>

<!-- SCRIPT TOGGLE PASSWORD -->
<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const icon = document.getElementById('eyeIcon');

        if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        } else {
            password.type = 'password';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        }
    }
</script>

</body>
</html>
