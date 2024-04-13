@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">سوپاس و پێزانین (پاش دوابەرزکردنەوه)</h2>

            <form id="myForm" action="{{ route('rezlenan.post') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="layani_supasdar" class="form-label">لایەنی سوپاسدەر</label>
                    <input type="text" name="layani_supasdar" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Layani Supasdar.</div>
                </div>

                <div class="mb-3">
                    <label for="zhmara" class="form-label">ژماره </label>
                    <input type="text" name="zhmara" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Hmara.</div>
                </div>

                <div class="mb-3">
                    <label for="barwari_farman" class="form-label">بەرواری فەرمانی سوپاس و پێزانین</label>
                    <input type="date" name="barwari_farman" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Barwari Farman.</div>
                </div>

                <div class="mb-3">
                    <label for="hoysupas_pezanin" class="form-label">هۆی سوپاس و پێزانین</label>
                    <input type="text" name="hoysupas_pezanin" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Hoy Supas.</div>
                </div>

                <div class="mb-3 text-center">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <button type="submit" id="submitButton" class="btn btn-primary">هەنگاوی دواتر</button>
                        </div>
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
