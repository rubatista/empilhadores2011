
@extends('layout.app')
@section('meta')
    <title>Produtos - Empilhadores2011</title>
    <meta name="description" content="drescrição de todos os produtos aqui" />
    <meta name="keywords" content="empilhadores, baterias empilhadores, garfos, porta-paletes" />
    <meta name="author" content="empilhadores2011">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact - Empilhadores2011" />
    <meta property="og:description" content="drescrição de todos os produtos aqui" />
    <meta property="og:url" content="http://www.empilhadores2011.net/produtos" />
    <meta property="og:site_name" content="Empilhadores2011" />
    <meta property="og:price:amount" content="0.0" />
    <meta property="og:price:currency" content="EU" />
    <meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
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
                  <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
              </div>
          </div>
      </div>
      <div class="row gx-5">
        @foreach($all_products as $subcat)
          @foreach($subcat as $subc)
            <div class="col-lg-4 mb-5">
              <a class="text-decoration-none link-dark stretched-link" href="/product/{{ $subc->slug }}">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://dummyimage.com/600x450/ced4da/6c757d" alt="{{ $subc->name }} - Empilhadores2011" />
                    <div class="card-body px-4 py-3">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $subc->product_details[0]->condition }}</div>
                        <h5 class="card-title mb-3">{{ $subc->name }}</h5>
                        <p class="card-text mb-0">{{ $subc->product_details[0]->fuel }} &middot; {{ $subc->product_details[0]->rated_capacity }}</p>
                    </div>
                </div>
              </a>
            </div>
          @endforeach
        @endforeach
      </div>
  </div>
</section>
@endsection

@section('footer-includes')

@endsection
