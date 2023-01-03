
@extends('layout.app')
@section('meta')
    <title>Equipamentos - Empilhadores2011</title>
    <meta name="description" content="Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's." />
    <meta name="keywords" content="empilhadores2011, empilhadores 2011, empilhadores, baterias empilhadores, garfos empilhadores, porta-paletes, porta-paletes, stacker's, stacker, empilhadores porto, empilhadores maia, empilhadores portugal" />
    <meta name="author" content="empilhadores2011">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Equipamentos - Empilhadores2011" />
    <meta property="og:description" content="Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's." />
    <meta property="og:url" content="https://www.empilhadores2011.com/" />
    <meta property="og:site_name" content="Empilhadores2011" />
    <meta property="og:image" content="https://www.empilhadores2011.com/images/logo-circu-magical-furniture.png" />
@endsection

@section('head-includes')
@endsection

@section('main-content')
<section class="py-5">
  <div class="container px-5 my-5">
      <div class="row gx-5 justify-content-center">
          <div class="col-lg-8 col-xl-6">
              <div class="text-center">
                  <h2 class="fw-bolder">Oportunidades!</h2>
                  <p class="lead fw-normal text-muted mb-5">Veja todos as máquinas disponiveis para compra.</p>
              </div>
          </div>
      </div>
      <div class="row gx-5">
        @foreach($instock as $stock)
          <div class="col-lg-4 mb-5">
              <div class="card h-100 shadow border-0">
                <a class="text-decoration-none link-dark stretched-link" href="/product/{{ $stock->slug }}">
                  <img class="card-img-top" src="/img/products/{{ $stock->slug }}/{{ $stock->slug }}-1.jpg" alt="{{ $stock->name }} - Empilhadores2011" />
                  <div class="card-body px-4 py-3">
                      <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $stock->product_details[0]->condition }}</div>
                      <h5 class="card-title mb-3">{{ $stock->name }}</h5>
                      <p class="card-text mb-0">{{ $stock->product_details[0]->fuel }} &middot; {{ $stock->product_details[0]->rated_capacity }}</p>
                  </div>
                </a>
              </div>
          </div>
        @endforeach
      </div>
  </div>
</section>
@endsection

@section('footer-includes')

@endsection
