@extends('front.index')

@section('navaka')
<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('chalaki.se') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="nawi_confrance" class="form-label">Nawi Confrance:</label>
                    <input type="text" name="nawi_confrance" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Nawi Confrance.</div>
                </div>

                <div class="mb-3">
                    <label for="shwen" class="form-label">Shwen:</label>
                    <input type="text" name="shwen" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Shwen.</div>
                </div>

                <div class="mb-3">
                    <label for="kati_bastni" class="form-label">Kati Bastni:</label>
                    <input type="date" name="kati_bastni" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Kati Bastni.</div>
                </div>

                <div class="mb-3">
                    <label for="zhmara" class="form-label">Zhmara:</label>
                    <input type="text" name="zhmara" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Zhmara.</div>
                </div>

                <div class="mb-3">
                    <label for="barwar" class="form-label">Barwar:</label>
                    <input type="date" name="barwar" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Barwar.</div>
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
