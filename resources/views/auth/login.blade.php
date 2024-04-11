<!DOCTYPE html>
<html lang="en"  >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .form-container {
            max-width: 500px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="mb-4">{{ session('status') }}</div>
                    @endif
                    <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="username" class="form-label">{{ __('Username') }}</label>
                            <input id="username" class="form-control" type="text" name="username" value="{{ old('username') }}" required autofocus autocomplete="username">
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
                        </div>
                    </form>

                    <!-- Forgot Password Link -->
                    <div class="mt-3 text-center">
                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                    </div>

                    <!-- Register Link -->
                    <div class="mt-3 text-center">
                        <a href="{{ route('register') }}">Not registered? Register here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
