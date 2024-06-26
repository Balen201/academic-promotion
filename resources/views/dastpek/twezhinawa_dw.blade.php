@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">ئەو تۆژینەوانەی بۆ ئەم بەرزکردنەوەی ئێستا پێشکەشیان دەکا</h2>

            <form id="myForm" action="{{ route('post.seven') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="title_twezhinawa" class="form-label">تایتلی تۆژینەوه</label>
                    <input type="text" name="title_twezhinawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Title Twezhinawa.</div>
                </div>

                <div class="mb-3">
                    <label for="shwen" class="form-label">شوێن </label>
                    <input type="text" name="shwen" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Shwen.</div>
                </div>

                <div class="mb-3">
                    <label for="kati_bllawkrdnawa" class="form-label">کاتی بڵاوکردنەوه</label>
                    <input type="date" name="kati_bllawkrdnawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Kati Bllawkrdnawa.</div>
                </div>

                <div class="mb-3">
                    <label for="facter" class="form-label">فاکتەری کاریگەری</label>
                    <input type="text" name="facter" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Facter.</div>
                </div>

                <div class="mb-3">
                    <label for="index_internet" class="form-label">ئیندێکسی ئینتەرنێت</label>
                    <input type="text" name="index_internet" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Index Internet.</div>
                </div>

                <div class="mb-3">
                    <label for="wargirawa" class="form-label">  ئایا لە نامەی ماستەر یان دکتۆرا وەرگیراوە</label>
                    <input type="text" name="wargirawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Wargirawa.</div>
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
