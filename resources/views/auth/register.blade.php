<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the form */
        .form-container {
            max-width: 550px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                            <!-- You can add error messages for name here -->
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                            <!-- You can add error messages for email here -->
                        </div>

                        <!-- Department -->
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <select class="form-select" id="department" name="department">
                                <option value="it">Information Technology</option>
                                <option value="cs">Computer Science</option>
                                <option value="se">Software Engineer</option>
                            </select>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                            <!-- You can add error messages for password here -->
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            <!-- You can add error messages for password confirmation here -->
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{ route('login') }}">Already registered? Log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
