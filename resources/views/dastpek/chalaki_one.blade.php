@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">

            <h2 class="text-center mb-4">سەربوردەی خوێندن (بەدوا شوێن دەسپێبکە )</h2>

            <form id="myForm" action="{{ route('xwendn.one') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="la" class="form-label">لە</label>
                    <input type="date" name="la" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="takw" class="form-label">تاکو</label>
                    <input type="date" name="takw" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="brwanama" class="form-label">بڕوانامە</label>
                    <input type="file" name="brwanama" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pspor" class="form-label">پسپۆری</label>
                    <input type="text" name="pspor" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="zanko" class="form-label">زانکۆ</label>
                    <input type="text" name="zanko" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="wllat" class="form-label">وڵات</label>
                    <input type="text" name="wllat" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="farmani_zanko" class="form-label">فەرمانی زانکۆیی (بۆ زانکۆکانی
                        ناوەخۆ) یان
                        فەرمانی یە کسانکردنی بڕوانامە (بۆ
                        زانکۆکانی دەرەوه )
                    </label>
                    <input type="file" name="farmani_zanko" class="form-control">
                    <div class="invalid-feedback">Please fill out this field.</div>
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
        var inputs = this.querySelectorAll('input');
        var isValid = true;

        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
                input.nextElementSibling.style.display = 'block'; // Display error message
            } else {
                input.classList.remove('is-invalid');
                input.nextElementSibling.style.display = 'none'; // Hide error message
            }
        });

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>

@endsection
