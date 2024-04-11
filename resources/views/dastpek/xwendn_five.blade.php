@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">زانیاری دەربارەی بڵاوکراوەکانی پێشووی داواکار</h2>

            <form id="myForm" action="{{ route('store.six') }}" method="post" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="title_twezhinawa" class="form-label">Title Twezhinawa:</label>
                    <input type="text" name="title_twezhinawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Title Twezhinawa.</div>
                </div>

                <div class="mb-3">
                    <label for="shweni_bllawkrdnawa" class="form-label">شوێنی بڵاوکردنەوه</label>
                    <input type="text" name="shweni_bllawkrdnawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for شوێنی بڵاوکردنەوه.</div>
                </div>

                <div class="mb-3">
                    <label for="kati_bllawkrdnawa" class="form-label">کاتی بڵاوکردنەوه</label>
                    <input type="date" name="kati_bllawkrdnawa" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for کاتی بڵاوکردنەوه.</div>
                </div>

                <div class="mb-3">
                    <label for="play_zanstibo" class="form-label">بۆ چ پلەیەکی
                        زانستی پێشتر پێشکەشی کردووه</label>
                    <select name="play_zanstibo" class="form-select" required>
                        <option value="my">Mamosay Yaridadar</option>
                        <option value="m">Mamosa</option>
                        <option value="py">Profisori Yaridar</option>
                        <option value="p">Profisor</option>
                    </select>
                    <div class="invalid-feedback">Please select an option for بۆ چ پلەیەکی زانستی پێشتر پێشکەشی کردووه.</div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
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
