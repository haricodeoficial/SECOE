
    <section class="section main-banner" id="inicio" data-section="section1">
    <div id="set-height"></div>
<p id="time"></p>
      <video id="bg-video" tabindex="0" autobuffer="autobuffer" preload="auto" autoplay="autoplay" loop="true" muted playsinline>
          <source src="<?php echo $url;?>vistas/img/tierra.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay2 header-text">
          <div class="caption">
            <h2>Ayudemos al planeta</h2>
              <div class="scroll-downs">

     <a href="#contactanos"> <div class="mousey">
 <div class="scroller"></div>
  </div>
</div></a>
          </div>
      </div>
 </section>
 <section id="mapa-jalisco">
   <div class="container-fluid"> 

        <div class="row">
            <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de Clima en Jalisco</h1>
            </div>
            <div class="col-sm-12 d-flex" onload="GetMap()">
              <div id="mapa-clima"></div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de Relieve de Jalisco</h1>
            </div>
            <div class="col-sm-12 container">
              
            </div>
           <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de Especies de Árboles en Jalisco</h1>
            </div>
            <div class="col-sm-12 container">
            </div>
           <div class="col-sm-4 d-flex">

              <img class="img-full box-shadow" src="<?php echo $url;?>vistas/img/section-1.webp">
           </div>
           <div class="col-sm-4 d-flex">
            <h3>Información</h3>
              <ul>
                <li>Estado:</li>
                <li>Clima dominante:</li>
                <li>Terreno dominante:</li>
                <li>Especies dominantes:</li>
              </ul>

           
           <div class="col-sm-4 d-flex">
            <h3>Datos curiosos</h3>
            </div>
           </div>
        </div>
    </div>
 </section>