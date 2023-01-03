@extends('layout.app')
@section('meta')
    <title>Contactos - Empilhadores2011</title>
    <meta name="description" content="Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's." />
    <meta name="keywords" content="empilhadores2011, empilhadores 2011, empilhadores, baterias empilhadores, garfos empilhadores, porta-paletes, porta-paletes, stacker's, stacker, empilhadores porto, empilhadores maia, empilhadores portugal" />
    <meta name="author" content="empilhadores2011">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contactos - Empilhadores2011" />
    <meta property="og:description" content="Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's." />
    <meta property="og:url" content="https://www.empilhadores2011.com/" />
    <meta property="og:site_name" content="Empilhadores2011" />
    <meta property="og:image" content="https://www.empilhadores2011.com/images/logo-circu-magical-furniture.png" />
@endsection

@section('head-includes')
<style>
.big-title{
    font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 800;
    font-size: 60px;
    color: #b80410!important;
    line-height: 1.4em;
}

.medium-title{
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 18px;
    line-height: 1.2em;
}
#map {
  height: 400px; /* The height is 400 pixels */
  width: 100%; /* The width is the width of the web page */
}
.errors-fields{
    font-size: 0.7rem!important;
    color: #dc515e!important;
    text-transform: uppercase!important;
    position: absolute;
    bottom: 5px;
    left: 0px;
}
.form-group{
    position: relative;
}
.map{
    border-radius: 7px;
    overflow: hidden;
    filter: saturate(35%) brightness(90%) contrast(110%);
    backface-visibility: hidden;
}
.form-input{
    -webkit-appearance: none;
    padding: 16px;
    padding-left: 0px;
    border: none;
    border-bottom: 2px solid #000 !important;
    border-radius: 0;
    font-size: 14px;
    font-weight: 600;
    line-height: 2em;
}
.form-control{
    background-color: transparent!important;
}
.form-control:focus {
  border-color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btnContact{
    color: #ffffff!important;
    border-width: 0px!important;
    border-color: #b80410;
    font-size: 16px;
    font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif!important;
    background-color: #b80410!important;
    padding-top: 8px!important;
    padding-right: 20px!important;
    padding-bottom: 8px!important;
    padding-left: 20px!important;
    margin-top: 20px!important;
    border-radius: 3px;
}
.info-text{
    font-size: 1em;
    color:#b80410;
}
@media(min-width:992px){
    .big-title{
        padding:0;
    }
    .border-form{
        padding-right: 60px;
        padding-left: 0px;
        border-right: 1px solid #333;
    }
    .padding-info{
        padding-left: 60px;
    }
}
@media(max-width:992px){
    .big-title{
        font-weight: 700;
        font-size: 3.5em;
        line-height: 1em;
    }
    .medium-title{
        font-size: 2em;
    }
    .padding-info{
        padding-top: 60px;
    }
    .form-input{
        font-size: 2em;
    }
    .btnContact{
        width: 100%;
        font-size: 2em;
    }
    .info-text{
        font-size: 2em;
    }
    .form-mobile{
        background-color: #ededed;
        padding: 50px 15px;
    }
}
</style>
@endsection

@section('main-content')
<div class="container-fluid container-lg pt-5 px-0">
  <div class="row m-0">
    <h3 class="big-title pb-5 text-uppercase">Entrar em contacto</h3>
    <div class="col-12 col-lg-7 border-form form-mobile">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
      <form method="post" action="{{ route('contact') }}" class="px-3 px-lg-0">
        {{ csrf_field() }}
        <h3 class="medium-title">Envie uma mensagem</h3>
            <div class="row">
                <div class="col-12">
                    <div class="form-group py-1">
                        <input type="text" name="name" class="form-control form-input" placeholder="Nome *" value="" />
                        @if ($errors->has('name'))
                            <span class="errors-fields">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group py-1">
                        <input type="text" name="email" class="form-control form-input" placeholder="Email *" value="" />
                        @if ($errors->has('email'))
                            <span class="errors-fields">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group py-1">
                        <input type="text" name="phone" class="form-control form-input" placeholder="Telemovel *" value="" />
                        @if ($errors->has('phone'))
                            <span class="errors-fields">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group h-100">
                        <textarea name="message" class="form-control form-input" placeholder="Mensagem *" style="width: 100%; height: 100%;"></textarea>
                        @if ($errors->has('message'))
                            <span class="errors-fields">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group py-1">
                    <button type="submit" class="btnContact"><i class="fa-solid fa-arrow-right"></i> Enviar Mensagem</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-12 col-lg-5 padding-info px-3 px-lg-5">
        <div class="row align-items-center h-100">
            <div class="col-12">
                <h3 class="medium-title">Ligue para nós</h3>
                <p class="info-text"><i class="fa-solid fa-phone"></i>  <a href="tel:+351917910265" class="text-decoration-none text-reset">+351 917 910 265</a></p>
            </div>
            <div class="col-12 py-5 py-lg-0">
                <h3 class="medium-title">Envie uma mensagem</h3>
                <p class="info-text"><i class="fa-solid fa-envelope"></i>  <a href="mailto:empilhadores2011@hotmail.com" class="text-decoration-none text-reset">empilhadores2011@hotmail.com</a></p>
            </div>
            <div class="col-12">
                <h3 class="medium-title">Visite-nos</h3>
                <p class="info-text"><i class="fa-solid fa-location-dot"></i>  Rua Avelino Sousa Marques nº663<br> &nbsp; &nbsp;4475-460 Nogueira da Maia, Porto</p>
            </div>
        </div>
    </div>
    <!--The div element for the map -->
    <div id="map m-0" style="padding-left: 0 !important;padding-right: 0 !important; padding-top: 10% !important;">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12000.700604475072!2d-8.5855377!3d41.2397425!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd12e0c891dbc0f8!2sEmpilhadores%202011!5e0!3m2!1spt-PT!2spt!4v1671539713857!5m2!1spt-PT!2spt" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
  </div>
</div>
@endsection

@section('footer-includes')

@endsection
