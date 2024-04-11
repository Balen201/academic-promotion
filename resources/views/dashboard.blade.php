@extends('front.index')

@section('navaka')
<style>
    .carousel-inner .carousel-item img {
        width: 100%;
        height: auto;
    }

    body {
        overflow-y: hidden; /* Disable vertical scrolling for the entire body */
    }

    .content-container {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }
</style>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/1920x1080?text=Image+1" class="d-block" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1920x1080?text=Image+2" class="d-block" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1920x1080?text=Image+3" class="d-block" alt="Image 3">
        </div>
    </div>
</div>

<div class="container-fluid content-container d-flex justify-content-center align-items-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-body text-center">
                    <p class="display-3">بەخێربێن بۆ ماڵپەڕی بەرزکردنەوەی پلەی زانستی</p>
                    <p class="lead">ئەم سیستەمە بەکاردێت بۆ پێشکەشکردنی بەرزکردنەوەی پەلی زانستی و بۆ بەدواداچوون بۆ مامەڵەکە</p>
                    <a href="renmay.pdf" class="btn btn-primary mx-2" target="_blank">ڕێنمای</a>
                    <a href="pedawisty.pdf" class="btn btn-primary mx-2" target="_blank">پێداویستی</a>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Dynamically calculate the top position of the content container based on the navbar height
    window.onload = function() {
        var navbarHeight = document.querySelector('.navbar').offsetHeight;
        document.querySelector('.content-container').style.top = navbarHeight + 'px';
    };

    // Automatically move to the next slide after 3 seconds
    $('.carousel').carousel({
        interval: 3000,
        pause: false // Set pause to false to make it continuous
    });
</script>
@endsection
