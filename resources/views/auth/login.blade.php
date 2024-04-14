@extends('front.index')

@section('navaka')
<div class="bg-cover bg-center bg-no-repeat" style="background-image: url('../admin/img/bg.jpg')">
    <div class="wrapper flex items-center justify-center min-h-screen">
        <form class="bg-transparent shadow-md rounded-lg px-8 pt-6 pb-8 mb-4" style="background-color: rgba(255, 255, 255, 0.1); width: 28rem;" method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-3xl font-bold text-white text-center mb-4">بەخێربێن بۆ  ماڵپەڕی بەرزکردنەوەی پلەی زانستی</h1>
            @if (Session::has('generated_username'))
            <div class="alert alert-success mb-4">
                Your automatically generated username: {{ Session::get('generated_username') }}
            </div>
            @endif
            <div class="mb-6">
                <label for="username" class="block text-white text-sm font-bold mb-2">یوزەرنەیم</label>
                <div class="relative">
                    <input type="text" id="username" name="username" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('username') border-red-500 @enderror" placeholder="یوزەرنەیمت بنووسە" required>
                    @error('username')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-white text-sm font-bold mb-2">پاسوۆرد</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="block w-full px-3 py-2 border rounded-md placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-transparent text-white @error('password') border-red-500 @enderror" placeholder="پاسوۆردت بنوسە" required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>
            <div class="mb-6 flex items-center justify-between">
                <label class="block text-white font-bold">
                    <a class="text-white text-sm hover:text-blue-300" href="{{ route('password.request') }}">پاسوۆردت لەبیرکردوە ؟</a>
                </label> <!-- Missing closing tag -->
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-white hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline w-full">چوونەژوورەوە</button>
            </div>
            <p class="text-white text-sm mt-4 text-center">
                ئەکاونتت نییە ؟ <a href="{{ route('register') }}" class="text-blue-500">خۆت تۆمار بکە</a>
            </p>
        </form>
    </div>
</div>
@endsection 
