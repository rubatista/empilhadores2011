@extends('layouts.master')
@section('meta_tags')
@endsection
@section('content')
<div class="container-fluid p-0">
    <!-- Slider main container -->
    <div class="swiper col-12 main_swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="https://dummyimage.com/1920x600/000/fff" class="w-100">
            </div>
            <div class="swiper-slide">
                <img src="https://dummyimage.com/1920x600/d60039/fff" class="w-100">
            </div>
            <div class="swiper-slide">
                <img src="https://dummyimage.com/1920x600/000/fff" class="w-100">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
</div>
<div></div>
@endsection
@section('footer_scripts')
<script>
    var main_swiper = new Swiper(".main_swiper", {
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>
@endsection
