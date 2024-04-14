@extends('front.index')

@section('navaka')
    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('../admin/img/bg.jpg')">
        <div class="wrapper flex items-center justify-center min-h-screen">
            <form class="bg-transparent shadow-md rounded-lg px-8 pt-6 pb-8 mb-4" style="background-color: rgba(255, 255, 255, 0.1); width: 28rem;" method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="text-3xl font-bold text-white text-center mb-4">تکایە خۆت تۆمار بکە</h1>
                <div class="mb-6">
                    <label for="name" class="block text-white text-sm font-bold mb-2">ناو</label>
                    <input id="name" name="name" type="text" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('name') border-red-500 @enderror" placeholder="ناو" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-white text-sm font-bold mb-2">ئیمەیڵ</label>
                    <input id="email" name="email" type="email" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('email') border-red-500 @enderror" placeholder="ئیمەیڵ" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="department" class="block text-white text-sm font-bold mb-2">بەش</label>
                    <select id="department" name="department" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('department') border-red-500 @enderror" required>
                        <option value="" class="text-black">بەشێک هەڵبژێرە</option>
                        <option value="bi" class="text-black">بایۆلۆجی</option>
                        <option value="ch" class="text-black">کیمیا</option>
                        <option value="ma" class="text-black">بیرکاری</option>
                        <option value="ph" class="text-black">فیزیا</option>
                        <option value="cs" class="text-black">کۆمپیوتەر</option>
                        <option value="zh" class="text-black">ژینگە</option>
                        <option value="ji" class="text-black">جیۆلۆجی</option>
                    </select>

                    @error('department')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-white text-sm font-bold mb-2">پاسوۆرد</label>
                    <input id="password" name="password" type="password" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('password') border-red-500 @enderror" placeholder="پاسوۆرد" required autocomplete="new-password">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-white text-sm font-bold mb-2">دووبارەکردنەوەی پاسوۆرد</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('password_confirmation') border-red-500 @enderror" placeholder="دووبارەکردنەوەی پاسوۆرد" required autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <button type="submit" class="btn btn-primary">{{ __('خۆت تۆمار بکە') }}</button>
                    </div>
                    <div>
                        <a href="{{ route('login') }}" class="text-white text-sm hover:text-blue-300">{{ __('پێشتر خۆت تۆمارکردووە ؟ بڕۆ ژوورەوە') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
