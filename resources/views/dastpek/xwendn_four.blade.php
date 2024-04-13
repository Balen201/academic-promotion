@extends('front.index')

@section('navaka')

<div class="bg-gray-100">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-50 bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">سەربوردەی بەرزکردنەوەی پلەی زانستی(بەدوا پلە دەسپێبکە)</h2>

            <form id="myForm" action="{{ route('store.five') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="play_zansti" class="form-label">پلەی زانستی</label>
                    <select name="play_zansti" class="form-select" required>
                        <option value="">پلەیەک هەڵبژێرە</option>
                        <option value="my">مامۆستای یاریدەدەر</option>
                        <option value="m">مامۆستا</option>
                        <option value="py">پرۆفیسۆری یاریدەدەر</option>
                        <option value="p">پرۆفیسۆر</option>
                    </select>
                    <div class="invalid-feedback">Please select an option for Play Znasti.</div>
                </div>

                <div class="mb-3">
                    <label for="barwari_wargrtn" class="form-label">بەرواری وەرگرتن</label>
                    <input type="date" name="barwari_wargrtn" class="form-control" required>
                    <div class="invalid-feedback">Please provide a date for Barwari Wargrtn.</div>
                </div>

                <div class="mb-3">
                    <label for="layani_plapedar" class="form-label">لایەنی ئەم پلەیەی پێداوه</label>
                    <input type="text" name="layani_plapedar" class="form-control" required>
                    <div class="invalid-feedback">Please provide a value for Layani Plapedar.</div>
                </div>

                <div class="mb-3">
                    <label for="farmani_zanko" class="form-label">فەرمانی زانکۆیی</label>
                    <input type="file" name="farmani_zanko" class="form-control" required>
                    <div class="invalid-feedback">Please choose a file for Farmani Zanko.</div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <button type="submit" id="submitButton" class="btn btn-primary">هەنگاوی دواتر</button>
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
