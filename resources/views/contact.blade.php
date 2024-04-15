@extends('front.index')
@section('navaka')


<div class="bg-blue-200 min-h-screen flex items-center justify-center">
    <div class="container mx-auto bg-white rounded-lg p-8 shadow-lg max-w-screen-lg">
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="md:w-1/4">
                <div class="address details flex flex-col items-center mb-4">
                    <i class="fas fa-map-marker-alt text-3xl text-purple-600 mb-2"></i>
                    <div class="topic text-lg font-semibold">ناونیشان</div>
                    <div class="text-one text-base text-gray-600">هەولێر NP12</div>
                    <div class="text-two text-base text-gray-600">هەڤاڵان 06</div>
                </div>
                <div class="phone details flex flex-col items-center mb-4">
                    <i class="fas fa-phone-alt text-3xl text-purple-600 mb-2"></i>
                    <div class="topic text-lg font-semibold">ژمارەی پەیواندی</div>
                    <div class="text-one text-base text-gray-600">+0098 9893 5647</div>
                    <div class="text-two text-base text-gray-600">+0096 3434 5678</div>
                </div>
                <div class="email details flex flex-col items-center">
                    <i class="fas fa-envelope text-3xl text-purple-600 mb-2"></i>
                    <div class="topic text-lg font-semibold"> ئیمەیڵ</div>
                    <div class="text-one text-base text-gray-600">codinglab@gmail.com</div>
                    <div class="text-two text-base text-gray-600">info.codinglab@gmail.com</div>
                </div>
            </div>
            <div class="md:w-3/4 md:ml-12">
                <div class="topic-text text-3xl font-semibold text-purple-600 mb-4"> هەر ئێستا پەیوەندیمان پێوە بکە </div>
                <p class="text-base text-gray-600 mb-4">إذا كان لديك أي عمل مني أو أي أنواع من الاستفسارات
                    المتعلقة بالدورة التعليمية الخاصة بي، يمكنك إرسال لي رسالة من هنا. سيكون من دواعي سروري مساعدتك.</p>
                <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col">
                    @csrf
                    <div class="input-box mb-2">
                        <input type="text" name="name" placeholder=" ناوی سیانی"
                            class="w-full h-10 px-4 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-purple-600">
                    </div>
                    <div class="input-box mb-2">
                        <input type="email" name="email" placeholder="  ئیمەیڵت بنووسە"
                            class="w-full h-10 px-4 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-purple-600">
                    </div>
                    <div class="input-box mb-2">
                        <textarea name="comment" placeholder=" پێشنیار یاخود تێبنیی"
                            class="w-full h-32 px-4 py-2 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                    </div>
                    <div class="button self-start">
                        <input type="submit" value=" ئێستا بینێرە"
                            class="text-white text-base px-6 py-2 rounded-md bg-purple-600 cursor-pointer transition duration-300 hover:bg-purple-700">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
<script>
    // Check for the session flash message
    @if(session('success'))
        // Show SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'سوپاس',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        });
    @endif
</script>

@endsection
