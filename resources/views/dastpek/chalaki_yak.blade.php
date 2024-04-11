@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('chalaki.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="lizhnay_post" class="form-label">Lizhnay Post:</label>
                    <input type="text" name="lizhnay_post" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Lizhnay Post.</div>
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

                <div class="mb-3">
                    <label for="maway_lizhna" class="form-label">Maway Lizhna:</label>
                    <input type="date" name="maway_lizhna" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Maway Lizhna.</div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">next</button>
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
