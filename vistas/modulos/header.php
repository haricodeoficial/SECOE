  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>SE</em>COE</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu2">
        <?php
        $item = null;
        $valor = null;
        $categorias = controladorHackathon::mostrarCategorias($item, $valor);
        foreach ($categorias as $key => $value) {
          echo '<li><a class="underline-hover-animation nav_item" href="'.$value["ruta"].'">'.$value["titulo"].'</a></li>';
        }
        ?>
  
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>                
      </div>
    </nav>
  </header>  