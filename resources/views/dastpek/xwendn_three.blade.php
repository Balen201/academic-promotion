@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">سەربوردەی کارکردن (بەدوا شوێن ده سپێبکە)</h2>

            <form id="myForm" action="{{ route('store.third') }}" method="post" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="la" class="form-label">لە</label>
                    <input type="date" name="la" class="form-control" required>
                    <div class="invalid-feedback">تکایە ئەم بەشە پڕکەوە</div>

                </div>

                <div class="mb-3">
                    <label for="takw" class="form-label">تاکو</label>
                    <input type="date" name="takw" class="form-control" required>
                    <div class="invalid-feedback">تکایە ئەم بەشە پڕکەوە</div>

                </div>

                <div class="mb-3">
                    <label for="pisha" class="form-label">پیشە</label>
                    <input type="text" name="pisha" class="form-control" required>
                    <div class="invalid-feedback">تکایە ئەم بەشە پڕکەوە</div>

                </div>

                <div class="mb-3">
                    <label for="shweni_kar" class="form-label"> شوێنی کار (ناوی دەزگا)</label>
                    <input type="text" name="shweni_kar" class="form-control" required>
                    <div class="invalid-feedback">تکایە ئەم بەشە پڕکەوە</div>
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
