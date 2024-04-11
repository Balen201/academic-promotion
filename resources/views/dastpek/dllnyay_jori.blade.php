@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">زهیان خئبا کئژای سژسژس سهسه سۆاا</h2>

            <form id="myForm" action="{{ route('post.jori') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="sall" class="form-label">Sall:</label>
                    <input type="text" name="sall" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Sall.</div>
                </div>

                <div class="mb-3">
                    <label for="hagbay_mamosta" class="form-label">Hagbay Mamosta:</label>
                    <input type="text" name="hagbay_mamosta" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Hagbay Mamosta.</div>
                </div>

                <div class="mb-3">
                    <label for="zanstxwazi_bardawam" class="form-label">Zanstxwazi Bardawam:</label>
                    <input type="text" name="zanstxwazi_bardawam" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please provide a value for Zanstxwazi Bardawam.</div>
                </div>

                <div class="mb-3">
                    <label for="daranjami_gshti" class="form-label">Daranjami Gshti:</label>
                    <input type="file" name="daranjami_gshti" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please choose a file for Daranjami Gshti.</div>
                </div>

                <div class="mb-3">
                    <label for="feedback_qutabi" class="form-label">Feedback Qutabi:</label>
                    <input type="file" name="feedback_qutabi" class="form-control border border-secondary" required>
                    <div class="invalid-feedback">Please choose a file for Feedback Qutabi.</div>
                </div>

                <button type="submit" class="btn btn-primary">next</button>
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
