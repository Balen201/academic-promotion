@extends('front.index')

@section('navaka')

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border rounded shadow">
                <div class="card-body text-center">
                    <h1 class="mb-4">بەخێربێن بۆ ئەم ماڵپەری بەزکردنەوەی داواکاری</h1>
                    <p class="mb-4">ئەم سیستەمە بەکاردێت   بۆ بەرزیکردنەوەی بەکارهێنانی مامەڵەکە.</p>
                    <a href="renmay.pdf" class="btn btn-primary mx-2" target="_blank">ڕێنمایی</a>
                    <a href="pedawisty.pdf" class="btn btn-primary mx-2" target="_blank">پێداویستی</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
<script>
    // Check for the session flash message
    @if(session('success'))
        // Show SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'پیرۆزە',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 6000
        });
    @endif
</script>
@endsection
