@extends('front.index')

@section('navaka')
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-8">
            <div class="p-5 border rounded mx-auto" style="max-width: 500px;">
                @if (Session::has('generated_username'))
                <div class="alert alert-success">
                    Your automatically generated username: {{ Session::get('generated_username') }}
                </div>
                @endif
                <h2 class="text-center mb-4">چوونەژوورەوە</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">{{ __('یوزەرنەیم') }}</label>
                        <input id="username" class="form-control" type="text" name="username" value="{{ old('username') }}" required autofocus autocomplete="username">
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('پاسوۆڕد') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">{{ __('چونەژوورەوە') }}</button>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <a href="{{ route('password.request') }}">{{ __('پاسوۆردت لەبیرکردووە') }}</a>
                </div>
                <div class="mt-3 text-center">
                    <a href="{{ route('register') }}">خۆت تۆمار نەکردووە ؟ لێرە خۆت تۆمارکە</a>
                </div>
            </div>
        </div>
    </div>
@endsection
