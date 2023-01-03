@extends('layout.app')
@section('meta')
    <title>{{ $product->name }} - Empilhadores2011</title>
    <meta name="description" content="Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's." />
    <meta name="keywords" content="empilhadores2011, empilhadores 2011, empilhadores, baterias empilhadores, garfos empilhadores, porta-paletes, porta-paletes, stacker's, stacker, empilhadores porto, empilhadores maia, empilhadores portugal" />
    <meta name="author" content="empilhadores2011">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $product->name }} - Empilhadores2011" />
    <meta property="og:description" content="Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's." />
    <meta property="og:url" content="https://www.empilhadores2011.com/" />
    <meta property="og:site_name" content="Empilhadores2011" />
    <meta property="og:image" content="https://www.empilhadores2011.com/images/logo-circu-magical-furniture.png" />
@endsection

@section('head-includes')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<style>
  .swiper {
        width: 100%;
        height: 100%;
      }
      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
</style>
@endsection
@section('main-content')
<div class="container pt-5">
  <div class="row m-0">
    <div class="col-lg-7 p-0">
      <div class="swiper slide-main">
        <div class="swiper-wrapper">
            @php
            $directory = "./img/products/".$product->slug."/";
            $filecount = count(glob($directory . '*.{jpg,gif,png}', GLOB_BRACE));
            @endphp
            @for($i = 1; $i <= $filecount; $i++)
              <div class="swiper-slide">
                  <img class="card-img-top" src="/img/products/{{ $product->slug }}/{{ $product->slug }}-{{$i}}.jpg" alt="Empilhadores2011" />
              </div>
            @endfor
        </div>
        <div class="swiper-pagination"></div>
    
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="col-lg-5 pt-0 ps-lg-5">
      <h2 class="fw-bolder text-uppercase">{{ $product->name }}</h2>
      <h3 class="fw-light text-uppercase">{{ $product->sub_category->name }}</h3>
      <!--  <h2 class="fw-bolder">{{ $product->sub_category->category->name }}</h2> -->
      <p class="fw-normal text-uppercase pt-4">Características:</p>
      <div style="line-height: 1.7!important;">
          <p class="fw-normal text-uppercase mb-0">- {{ $product->product_details[0]->brand }}</ p>
          <p class="fw-normal text-uppercase mb-0">- {{ $product->product_details[0]->condition }}</p>
          <p class="fw-normal text-uppercase mb-0">- {{ $product->product_details[0]->lifting_height }}</p>
          <p class="fw-normal text-uppercase mb-0">- {{ $product->product_details[0]->rated_capacity }}</p>
          <p class="fw-normal text-uppercase mb-0">- {{ $product->product_details[0]->color }}</p>
          <p class="fw-normal text-uppercase mb-0">- {!! $product->product_details[0]->options !!}</p>
      </div>
    </div>
  </div>
</div>
<section class="py-5">
  <div class="container px-5 my-5">
      <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
              <div class="text-center">
                  <h2 class="fw-bolder">Mais Oportunidades!</h2>
              </div>
          </div>
      </div>
      <div class="row gx-5">
        @foreach($instock as $stock)
          <div class="col-lg-4 mb-5">
              <div class="card h-100 shadow border-0">
                  <img class="card-img-top" src="https://dummyimage.com/600x450/ced4da/6c757d" alt="{{ $stock->name }} - Empilhadores2011" />
                  <div class="card-body px-4 py-3">
                      <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $stock->product_details[0]->condition }}</div>
                      <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">{{ $stock->name }}</h5></a>
                      <p class="card-text mb-0">{{ $stock->sub_category->name }} &middot; {{ $stock->product_details[0]->fuel }} &middot; {{ $stock->product_details[0]->rated_capacity }}</p>
                  </div>
              </div>
          </div>
        @endforeach
      </div>
  </div>
</section>
@endsection

@section('footer-includes')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".slide-main", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

</script>
@endsection
