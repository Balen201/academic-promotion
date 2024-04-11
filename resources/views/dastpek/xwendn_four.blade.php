@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('store.five') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="play_zansti" class="form-label">Play Znasti:</label>
                    <select name="play_zansti" class="form-select" required>
                        <option value="my">Mamostay Yaridadar</option>
                        <option value="m">Mamosta</option>
                        <option value="py">Profisori Yaridadar</option>
                        <option value="p">Profisor</option>
                    </select>
                    <div class="invalid-feedback">Please select an option for Play Znasti.</div>
                </div>

                <div class="mb-3">
                    <label for="barwari_wargrtn" class="form-label">Barwari Wargrtn:</label>
                    <input type="date" name="barwari_wargrtn" class="form-control" required>
                    <div class="invalid-feedback">Please provide a date for Barwari Wargrtn.</div>
                </div>

                <div class="mb-3">
                    <label for="layani_plapedar" class="form-label">Layani Plapedar:</label>
                    <input type="text" name="layani_plapedar" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Layani Plapedar.</div>
                </div>

                <div class="mb-3">
                    <label for="farmani_zanko" class="form-label">Farmani Zanko:</label>
                    <input type="file" name="farmani_zanko" class="form-control" required>
                    <div class="invalid-feedback">Please choose a file for Farmani Zanko.</div>
                </div>

                <button type="submit" class="btn btn-primary">Bro Step6</button>
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
