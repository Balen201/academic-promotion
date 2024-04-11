@extends('front.index')
@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">زانیاری دەربارەی کەسی داواکار</h2>
            <label class="form-label mb-2">ناو:</label>
            <input type="text" disabled placeholder="{{ $person->name }}" class="form-control mb-4">
            <label class="form-label mb-2">ناونیشان: کۆلیژ: بە ش: لق:</label>
            <input type="text" disabled placeholder="{{ $person->college }}: {{ $person->department }} : {{ $person->address }}" class="form-control mb-4">
            <form id="myForm" action="{{ route('chalaki.one') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label mb-2">پسپۆری گشتی:</label>
                    <input type="text" name="pspori_gshti" class="form-control mb-2">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-4">
                    <label class="form-label mb-2">پسپۆری وورد:</label>
                    <input type="text" name="pspori_wrd" class="form-control mb-2">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" id="submitButton" class="btn btn-primary">Click</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var inputs = this.querySelectorAll('input');
        var isValid = true;

        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>

@endsection
