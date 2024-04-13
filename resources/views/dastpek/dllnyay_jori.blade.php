@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">ئەنجامەکانی دڵنیایی جۆری بۆ ژمارەی ساڵی پێویست بۆ ئەم بەرزکردنەوەیە</h2>

            <form id="myForm" action="{{ route('post.jori') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="sall" class="form-label">ساڵ</label>
                    <input type="text" name="sall" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Sall.</div>
                </div>

                <div class="mb-3">
                    <label for="hagbay_mamosta" class="form-label">هەگبەی مامۆستا</label>
                    <input type="text" name="hagbay_mamosta" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Hagbay Mamosta.</div>
                </div>

                <div class="mb-3">
                    <label for="zanstxwazi_bardawam" class="form-label">زانستخوازی بەردەوام</label>
                    <input type="text" name="zanstxwazi_bardawam" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Zanstxwazi Bardawam.</div>
                </div>

                <div class="mb-3">
                    <label for="daranjami_gshti" class="form-label">دەرەنجامی گشتی</label>
                    <input type="file" name="daranjami_gshti" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please choose a file for Daranjami Gshti.</div>
                </div>

                <div class="mb-3">
                    <label for="feedback_qutabi" class="form-label">فیدباکی قوتابی</label>
                    <input type="file" name="feedback_qutabi" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please choose a file for Feedback Qutabi.</div>
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
