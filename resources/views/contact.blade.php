@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">هەر پێشنیارێکت هەیە دەتوانی بینێری</h2>

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="first_name" class="form-label">  ناوی سیانی :</label>
                    <input type="text" name="name" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please enter your first name.</div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">ئیمەیڵ : </label>
                    <input type="email" name="email" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">پیشنیار یان داواکاری :</label>
                    <textarea name="comment" class="form-control border border-secondary" cols="16" rows="5"></textarea>
                    <div class="invalid-feedback">Please enter a valid text area .</div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
