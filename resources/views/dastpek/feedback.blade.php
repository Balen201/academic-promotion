@extends('front.index')

@section('navaka')

<div class="container-lg bg-gray-100">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50 p-4 rounded shadow">
            <h2 class="text-center mb-4">هەر تێبینیەکی تر که داواکار دەیەوێت تۆماریان بکات</h2>

            <form id="myForm" action="{{ route('feedback') }}" method="POST" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <textarea name="comment" class="form-control" cols="30" rows="10" required></textarea>
                    <div class="invalid-feedback">Please provide a comment.</div>
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
