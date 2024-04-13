@extends('front.index')

@section('navaka')
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-8">
            <div class="p-5 border rounded mx-auto" style="max-width: 550px;">
                <h2 class="text-center mb-4"><span class="text-danger">بەخێربێن</span>  تکایە خۆت تۆمار بکە</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">: ناو  </label>
                        <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"> : ئیمەیڵ   </label>
                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label"> : بەش</label>
                        <select class="form-select @error('department') is-invalid @enderror" id="department" name="department">
                            <option value="">بەشێک هەڵبژێرە</option>
                            <option value="bi">بایۆلۆجی</option>
                            <option value="ch">کیمیا</option>
                            <option value="ma">بیرکاری</option>
                            <option value="ph">فیزیا</option>
                            <option value="cs">کۆمپیوتەر</option>
                            <option value="zh">ژینگە</option>
                            <option value="ji">جیۆلۆجی</option>
                        </select>
                        @error('department')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">: پاسوۆرد</label>
                        <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">: دووبارەکردنەوەی پاسوۆڕد</label>
                        <input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">خۆت تۆمار بکە</button>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="{{ route('login') }}">پێشتر خۆت تۆمارکردووە ؟ بڕۆ ژوورەوە</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
