@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <h2 class="text-center mb-4">ئەو کتێب یان چاپتەرەی بۆ ئەم بەرزکردنەوەی ئێستا پێشکەشیان دەکا</h2>

            <form id="myForm" action="{{ route('blawkrdnawa') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="nawnishani_kteb" class="form-label">ناونیشانی کتێب</label>
                    <input type="text" name="nawnishani_kteb" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Nawnishani Kteb.</div>
                </div>

                <div class="mb-3">
                    <label for="shweni_bllawkrdnawa" class="form-label">شوێنی بڵاوکردنەوه</label>
                    <input type="text" name="shweni_bllawkrdnawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Shweni Bllawkrdnawa.</div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <button type="submit" id="submitButton" class="btn btn-primary">هەنگاوی دواتر</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        if (!this.checkValidity()) {
            event.preventDefault(); // Prevent form submission if validation fails
            event.stopPropagation();
        }
        this.classList.add('was-validated');
    });
</script>

@endsection
