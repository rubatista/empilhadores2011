
<style>
.title-footer{
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 1.2em;
    line-height: 1.2em;
}
.desc-company-footer,
.contact-footer,
.hours-footer{
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 300;
    font-size: 1.1em;
    text-align: justify;
}
@media(max-width:992px){
    .title-footer{
        font-size:2.5em!important;
    }
    
    .desc-company-footer,
    .contact-footer p,
    .hours-footer {
       font-size:2em!important; 
    }
    
    
}
</style>
<footer class="text-white text-center mt-5 text-lg-start bg-dark">
<div class="container-fluid container-lg p-4">
  <div class="row pt-5 pt-lg-4">
    <div class="col-12 col-lg-4 pb-5 pb-lg-0">
      <p class="text-uppercase mb-4 title-footer">Sobre a Empresa</p>

      <p class="desc-company-footer px-5 px-lg-0 pe-lg-5">
        Empilhadores2011 é uma empresa vocacionada para a venda de equipamentos novos ou usados e
        assistência técnica de empilhadores elétricos, gás e diesel, porta-paletes elétricos e manuais e stacker's.
      </p>
    </div>
    <div class="col-12 col-lg-4 py-5 py-lg-0">
        <div class="row justify-content-center">
            <p class="text-uppercase mb-4 pb-1 title-footer">Contactos</p>
            <div class="contact-footer p-0" style="width: 650px;">
                <p class="m-0"><i class="fas fa-home"></i>&nbsp;&nbsp;Rua Avelino Sousa Marques nº663<br>&nbsp;&nbsp;4475-460 Nogueira da Maia, Porto</p>
                <p class="py-5 py-lg-3 m-0"><i class="fas fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:empilhadores2011@hotmail.com" class="text-decoration-none text-reset">empilhadores2011@hotmail.com</a></p>
                <p class="m-0"><i class="fas fa-phone"></i>&nbsp;&nbsp;<a href="tel:+351917910265" class="text-decoration-none text-reset">+351 917 910 265</a></p>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4 py-5 py-lg-0">
        <div class="row justify-content-center px-5 px-lg-0">
          <div class="col-12 ps-2">
            <p class="text-uppercase title-footer">Horário de Funcionamento</p>
          </div>
          <table class="table text-white hours-footer">
            <tbody class="fw-normal">
              <tr>
                <td>Segunda-feira - Sexta-feira:</td>
                <td>8:00 - 19:00</td>
              </tr>
              <tr>
                <td>Sábado:</td>
                <td>8:00 - 18:00</td>
              </tr>
              <tr>
                <td>Domingo:</td>
                <td>Fechado</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2022 Copyright Empilhadores2011
</div>
</footer>

  @section('footer-includes') 
  @show