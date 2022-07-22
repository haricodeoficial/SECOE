
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
                    <h1 class="text-center ">Mapa de Jalisco</h1>
            </div>
            <div class="container">
           <div class="col-sm-4 d-flex">
            <h3>Información</h3>
              <ul>
                <li>Estado:</li>
                <li>Clima dominante:</li>
                <li>Terreno dominante:</li>
                <li>Especies dominantes:</li>
              </ul>

           </div>
           <div class="col-sm-4 d-flex">

              <img class="img-full box-shadow" src="<?php echo $url;?>vistas/img/section-1.webp">
           </div>
           <div class="col-sm-4 d-flex">
            <h3>Datos curiosos</h3>
            </div>
           </div>
        </div>
    </div>
 </section>


 <section id="mapas">
   <div class="container-fluid"> 

        <div class="row">
           <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de Jalisco</h1>
            </div>
            <div class="container">
           <div class="col-sm-6 d-flex">
                 <img class="img-full box-shadow" src="<?php echo $url;?>vistas/img/section-1.webp">
            <h3>Mejores condiciones de clima para reforestar</h3>                 

           </div>
      <div class="col-sm-6 d-flex">
                 <img class="img-full box-shadow" src="<?php echo $url;?>vistas/img/section-1.webp">
            <h3>Mejores condiciones de tierra para reforestar</h3>                 
            <ul>
              <li></li>
              <li></li>
            </ul>
            <h3>Cantidad de carbono capturado: </h3>
           </div>
           </div>
        </div>
    </div>
 </section>
<section id="mapa-especies">
   <div class="container-fluid"> 

        <div class="row">
           <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Especies</h1>
            </div>
            <div class="container">
           <div class="col-sm-4 d-flex">
            <h3>Guía de árboles comunes en Jalisco</h3>
              <ul>
                <li>Especie 1</li>
                <li>Especie 2</li>
                <li>Especie 3</li>
              </ul>

           </div>
           <div class="col-sm-4 d-flex">

              <img class="img-full box-shadow" src="<?php echo $url;?>vistas/img/section-1.webp">
           </div>
           <div class="col-sm-4 d-flex">
            </div>
           </div>
        </div>
    </div>
</section>
<section id="calculadore-terreno">
  <div class="container-fluid">
    <div class="row">

<div class="container">
 
   <div class="col-sm-6 d-flex">
    <h3>Calculadora de árboles por terreno</h3>
  <form action="/action_page.php">
   <select name="cars" id="select-style">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
<h3>Dimensiones:</h3>
<input type="number" name="dimension" id="enter-number">
<input type="number" name="dimension2" id="enter-number">
<h3>Cantidad de árboles:</h3>
<h3>Cantidad aproximada de Co2 capturada:</h3>

  <input type="submit" value="Calcular" id="boton-submit">
</form>
<form action="/action_page.php">

  <h2>Viabilidad del proyecto</h2>
<h3>Clima predominante: </h3>
<h3>Terreno predominante:</h3>
<h3>Co2 Capturado: </h3>
  <input type="submit" value="Calcular" id="boton-submit">

</form>
            </div>

            <div class="col-sm-6 d-flex">
                <form action="/action_page.php">
              <h3>Precio estimado por árbol</h3>

                 <select name="cars" id="select-style">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
<h3>Cantidad:</h3>
<input type="number" name="dimension2" id="enter-number">
<h3>Precio estimado: </h3>
  <input type="submit" value="Calcular" id="boton-submit">

</form>
            </div>
  
</div>
    </div>
  </div>

</section>
