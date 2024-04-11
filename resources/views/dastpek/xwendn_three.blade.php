@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('store.third') }}" method="post" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="la" class="form-label">La:</label>
                    <input type="date" name="la" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for La.</div>
                </div>

                <div class="mb-3">
                    <label for="takw" class="form-label">Takw:</label>
                    <input type="date" name="takw" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Takw.</div>
                </div>

                <div class="mb-3">
                    <label for="pisha" class="form-label">Pisha:</label>
                    <input type="text" name="pisha" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Pisha.</div>
                </div>

                <div class="mb-3">
                    <label for="shweni_kar" class="form-label">Shweni Kar:</label>
                    <input type="text" name="shweni_kar" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Shweni Kar.</div>
                </div>

                <button type="submit" class="btn btn-primary">Bro Xwendn4</button>
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
