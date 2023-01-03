<style>
.img-menu-logo{
    width:120px;
}

@media(max-width:992px){
    .img-menu-logo{
        width:220px;
    }
    .navbar-toggler-icon{
        width: 2.5em !important;
        height: 2.5em !important;
    }
    .navbar-nav .nav-item{
        padding-top: 0.5em;
        font-size:2em;
    }
    .navbar-nav .nav-item .dropdown-menu .dropdown-item{
        padding-top: 0.5em;
        font-size:2em;
    }
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid container-lg px-5">
      <a class="navbar-brand" href="/"><img class="img-menu-logo" src="/img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto py-5 py-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('homepage') }}">Inicio</a>
                </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Equipamentos</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                      <li><a class="dropdown-item" href="{{ route('products') }}">Empilhadores</a></li>
                      <li><a class="dropdown-item" href="portfolio-overview.html">Stacker's</a></li>
                      <li><a class="dropdown-item" href="portfolio-overview.html">Porta-Paletes</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Serviços</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownBlog">
                      <li><a class="dropdown-item" href="blog-home.html">Aluguer</a></li>
                      <li><a class="dropdown-item" href="blog-post.html">Assistência Técnica</a></li>
                      <li><a class="dropdown-item" href="blog-home.html">Inspeções</a></li>
                  </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="about.html">Peças</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contactos</a></li>
          </ul>
      </div>
  </div>
</nav>