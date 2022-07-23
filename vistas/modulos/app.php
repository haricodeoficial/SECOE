
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

        <div class="row" style="background-color: #548294; padding-bottom: 50px;">
            <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de Clima en Jalisco</h1>
            </div>
            <div class="center-image col-sm-8 d-flex">
              <div id="mapa-clima" class="mapa"></div>
            </div>
        </div>
        <div class="row" style="background-color: #A4BF75; padding-bottom: 50px;">
            <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de terrenos de Jalisco</h1>
            </div>
            <div class="center-image col-sm-8 d-flex">
              <div id="mapa-relieve" class="mapa"></div>
            </div>
        </div>
        <div class="row">
           <div class="col-sm-12 d-flex justify-content-center titulo-margen">
                    <h1 class="text-center ">Mapa de Especies de Árboles en Jalisco</h1>
            </div>
            <div class="center-image col-sm-8 d-flex">
            </div>
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

 <section id="calculadore-terreno">
  <div class="container-fluid">
    <div class="row">
      <div class="container">
        <div class="col-sm-6 d-flex">
          <h3>Calculadora de árboles por terreno</h3>
          <form name="FormularioPlanoCuadrado" method="post" action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"">
          <h3>Calculo por Plano Cuadrado:</h3>
            <h3>Dimensiones:</h3>
            <label >Distancia X de su marco de plantacion</label>
            <input type="number" name="dimension" class="enter-number">
            <label >Distancia Y de su marco de plantacion</label>
            <input type="number" name="dimension2" class="enter-number">
            <input type="submit" value="Calcular" class="boton-submit">
          </form><!--CALCULO 1 DIMENSION POR DIMENSION-->
          
<?php
  if (isset($_POST['dimension'])) {
    $dimensionA=floatval($_POST['dimension']);
  }
  else{
    ?> <h4>Cantidad de arboles: </h4><?php 
    $dimensionA=0;
  }
  if (isset($_POST['dimension2'])) {
    $dimensionB=floatval($_POST['dimension2']);
  }
  else{
    ?> <h4></h4><?php 
    $dimensionB=0;
  }

if (!isset($_POST['dimension']) || !isset($_POST['dimension2'])) {
  $comparadorVar=false;
}
else{
  $comparadorVar=true;
  if ($dimensionA==null) {
    ?> <h4></h4><?php 
  }
  else{
    if ($comparadorVar) {
      $multiplicacion=($dimensionA*$dimensionB);
      if ($multiplicacion!=0) {
        $resultado = 10000/$multiplicacion;
        ?>
        <h3>Cantidad de arboles: <?php echo round($resultado); ?></h3>
        <?php
      }
      else{
        ?> <h4></h4><?php 
      }
    }
  }

}
?>
      <form name="FormularioFresbolillo" method="post" action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"">
          <h3>Calculo por Fresbolillo:</h3>
            <h3>Dimensiones:</h3>
            <label >Distancias X de su marco de plantacion </label>
            <input type="number" name="dimensionF1" class="enter-number">
            <label >Distancia Y de su marco de plantacion</label>
            <input type="number" name="dimensionF2" class="enter-number">
            <input type="submit" value="Calcular" class="boton-submit">
      </form><!--CALCULO 1 DIMENSION POR DIMENSION-->

<?php
  if (isset($_POST['dimensionF1'])) {
    $dimensionFA=floatval($_POST['dimensionF1']);
  }
  else{
    ?> <h4>Cantidad de arboles: </h4><?php 
    $dimensionFA=0;
  }
  if (isset($_POST['dimensionF2'])) {
    $dimensionFB=floatval($_POST['dimensionF2']);
  }
  else{
    ?> <h4></h4><?php 
    $dimensionFB=0;
  }
  if($dimensionFA!==0 ||$dimensionFB!==0 ){
    $multiplicacionf=($dimensionFA*$dimensionFB*0.866);
        $resultadof = 10000/$multiplicacionf;
        ?>
        <h3>Cantidad de arboles: <?php echo round($resultadof); ?></h3>
        <?php
  }
  else{
    ?> <h4></h4><?php 
  }
?>

<form name="FormularioParcela" method="post" action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"">
          <h3>Calculo por Parcela:</h3>
            <h3>Dimensiones:</h3>
            <label>Número de arboles por hectarea</label>
            <input type="number" name="dimensionP1" class="enter-number">
            <label >Hectareas de la parcela</label>
            <input type="number" name="dimensionP2" class="enter-number">
            <input type="submit" value="Calcular" class="boton-submit">
      </form><!--CALCULO 1 DIMENSION POR DIMENSION-->

<?php
  if (isset($_POST['dimensionP1'])) {
    $dimensionPA=floatval($_POST['dimensionP1']);
  }
  else{
    ?> <h4>Cantidad de arboles: </h4><?php 
    $dimensionPA=0;
  }
  if (isset($_POST['dimensionP2'])) {
    $dimensionPB=floatval($_POST['dimensionP2']);
  }
  else{
    ?> <h4></h4><?php 
    $dimensionPB=0;
  }
  if($dimensionPA!==0 ||$dimensionPB!==0 ){
    $multiplicacionP=($dimensionPA*$dimensionPB);
        $resultadoP = $multiplicacionP/1000;
        ?>
        <h3>Cantidad de arboles: <?php echo round($resultadoP); ?></h3>
        <?php
  }
  else{
    ?> <h4></h4><?php 
  }
?>




          <form name="FormularioClima" method="POST" action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>> <!--con una bd-->
          <h2>Viabilidad del proyecto:</h2>

          <h3>Clima Predominante:<br> 1. Zonas Aridas <br>2. Zonas Tropicales<br>3. Zonas Polares </h3>
          <input type="number" placeholder="Metros de terreno" name="ClimaI" class="enter-number">
          <h3>Terreno en Metros Cuadrados: </h3>
          <input type="number" placeholder="Terreno" name="TerrenoI" class="enter-number">
          <input type="submit" value="Calcular" class="boton-submit">
          </form>
          <?php
           if (isset($_POST['ClimaI'])) {
            $Clima=intval($_POST['ClimaI']);
          }
          else{
            ?> <h4>CO2 capturado: </h4><?php 
            $Clima=0;
          }
          if (isset($_POST['TerrenoI'])) {
            $Terreno=intval($_POST['TerrenoI']);
          }
          else{
            ?> <h4> </h4><?php 
            $Terreno=0;
          }
          if ($Clima === 1) {
           $climaPre=4;
          }
          else if($Clima === 2){
            $climaPre=9;
          }
          else if($Clima === 3){
            $climaPre=22.5;
          }
          else if($Clima === 0){
            $climaPre=0;
          }
          else{
            $climaPre=0;
          }

          if($Terreno!==0 ||$climaPre!==0 ){
            $CalculoCO2=($climaPre*$Terreno);
            ?> <h4>El resultado es: <?php echo $CalculoCO2?></h4><?php 
          }
          else{
            ?> <h4></h4><?php 
          }
          ?>

        </div>          
</div>
</div>
</div>

</section>
message.txt
9 KB