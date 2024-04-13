@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">ناونیشانی نامەکانی خوێندنی باڵا</h2>

            <form id="myForm" action="{{ route('xwendn.dw') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="brwanama" class="form-label">بڕوانامە</label>
                    <input type="file" name="brwanama" class="form-control" required>
                    <div class="invalid-feedback">تکایە بروانامە دابگرە</div>
                </div>
                <div class="mb-3">
                    <label for="nawnishani_nama" class="form-label">ناونیشانی نامەکەی</label>
                    <input type="text" name="nawnishani_nama" class="form-control" required>
                    <div class="invalid-feedback">Please provide a title.</div>
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
