@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">

            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('andam.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="sandica" class="form-label">Sandica (Andamyat):</label>
                    <input type="text" name="sandica" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Sandica.</div>
                </div>

                <div class="mb-3">
                    <label for="zhmaray_nasnama" class="form-label">Zhmaray Nasnama:</label>
                    <input type="number" name="zhmaray_nasnama" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Zhmaray Nasnama.</div>
                </div>

                <div class="mb-3">
                    <label for="barwari_andam" class="form-label">Barwari Buna Andam:</label>
                    <input type="date" name="barwari_andam" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Barwari Buna Andam.</div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">next</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // JavaScript for Bootstrap validation
    document.getElementById('myForm').addEventListener('submit', function(event) {
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        this.classList.add('was-validated');
    });
</script>

@endsection
