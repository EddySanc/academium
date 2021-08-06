   
   <section class="popular-places" id="tabs-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">

                        <h2>Construcción (8 cursos)</h2>
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                
              <?php
                  for($i=1; $i<=8; $i++)
                  {
                    echo ' <div class="item popular-item">
                              <div class="thumb">
                                <img src="./assets/images/fotos/construccion/c'.$i.'.jpg">
                        
                              </div>
                           </div>';
                  }
              ?>

              
            </div>
        </div>


    </section>

<a href="#fondo">
  <div class="row alert alert-success" id="ancho">
    <div class="col-xs-6"><img src="./img/dinero.png"></div>
    <div class="col-xs-6 tito">COMPRAR</div>
  </div>
</a>

<a href="#contacto">
  <div class="row alert alert-success" id="ancho">
    <div class="col-xs-6 "><img src="./img/call.png"></div>
    <div class="col-xs-6 tito">CONTACTAR</div>
  </div>
</a>
<!-- -->
