@extends('front.index')

@section('navaka')
<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('chalaki.dw') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="brwanama" class="form-label">Brwanama:</label>
                    <input type="file" name="brwanama" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please select a file.</div>
                </div>

                <div class="mb-3">
                    <label for="nawi_qutabi" class="form-label">Nawi Qutabi:</label>
                    <input type="text" name="nawi_qutabi" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Nawi Qutabi.</div>
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
                    <label for="barwari_darchun" class="form-label">Barwari Darchun:</label>
                    <input type="date" name="barwari_darchun" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Barwari Darchun.</div>
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
