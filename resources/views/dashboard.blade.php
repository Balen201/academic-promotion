@extends('front.index')

@section('navaka')

<section id="promo" class="relative min-h-screen flex justify-center items-center py-20">
    <!-- Background image -->
    <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('../admin/img/cover.jpg'); filter: blur(5px);"></div>

    <!-- Content -->
    <div class="container mx-auto text-center relative z-10">
        <h2 class="text-4xl font-bold text-blue-600 bg-transparent">زانکۆی <span class="text-yellow-500">سەلاحەدین</span></h2>
        <p class="text-lg text-gray-800 mt-4 bg-transparent">بەخێربێن بۆ  ماڵپەڕی بەرزکردنەوەی پلەی زانستی</p>
        <div class="mt-8">
            <a class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full mr-4 no-underline" href="renmay.pdf" target="_blank">ڕێنمایی</a>
            <a class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-full no-underline" href="pedawisty.pdf" target="_blank">پێداویستی</a>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
<script>
    // Check for the session flash message
    @if(session('success'))
        // Show SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'پیرۆزە',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 5000
        });
    @endif
</script>
@endsection
