
<footer class="footer-05">
			<div class="container">
			
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h2 class="footer-heading">Información</h2>
						<div class="block-23 mb-3">
              <ul>
                <li><span class="icon ion-ios-pin"></span><span class="text">Guatemala, Guatemala zona 16</span></li>
                <li><a href="#"><span class="icon ion-ios-call"></span><span class="text">+502 xxxx-xxxx</span></a></li>
                <li><a href="#"><span class="icon ion-ios-send"></span><span class="text">haricodeoficial@gmail.com</span></a></li>
              </ul>
            </div>

					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
							<h2 class="footer-heading">Ultimas noticias</h2>
							 <?php
        $item = null;
        $valor = null;
        $categorias = controladorHackathon::mostrarNoticias($item, $valor);
        foreach ($categorias as $key => $value) {
     echo '	<div class="block-21 mb-4 d-flex">
	              <a href="'.$value["enlace"].'" target="_blank" class="img mr-4 rounded" style="background-image: url('.$value["img"].');"></a>
	              <div class="text">
	                <h3 class="heading"><a href="'.$value["enlace"].'" target="_blank">'.$value["titulo"].'</a></h3>
	                <div class="meta">
	                  <div><a href="#"><span class="icon-calendar"></span>'.$value["fecha-publicacion"].'</a></div>
	                 
	                </div>
	              </div>
	            </div>';
        }
        ?>
						
	        
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h2 class="footer-heading">Afiliados</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="featured">
									<a href="#" class="img rounded mb-3" style="background-image: url(<?php echo $url;?>vistas/img/haricode.png);"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h2 class="footer-heading">Instagram</h2>
						<div class="block-24">
							<div class="row no-gutters">
								<div class="col-4 col-md-4">
									<a href="https://www.instagram.com/haricodeoficial/" target="_blank" class="img" style="background-image: url(<?php echo $url;?>vistas/img/instagram/img1.jpg);"></a>
								</div>
								<div class="col-4 col-md-4">
									<a href="https://www.instagram.com/haricodeoficial/" target="_blank" class="img" style="background-image: url(<?php echo $url;?>vistas/img/instagram/img2.jpg);"></a>
								</div>
								<div class="col-4 col-md-4">
									<a href="https://www.instagram.com/haricodeoficial/" target="_blank" class="img" style="background-image: url(<?php echo $url;?>vistas/img/instagram/img3.jpg);"></a>
								</div>
								<div class="col-4 col-md-4">
									<a href="https://www.instagram.com/haricodeoficial/" target="_blank" class="img" style="background-image: url(<?php echo $url;?>vistas/img/instagram/img4.jpg);"></a>
								</div>
								<div class="col-4 col-md-4">
									<a href="https://www.instagram.com/haricodeoficial/" target="_blank" class="img" style="background-image: url(<?php echo $url;?>vistas/img/instagram/img5.jpg);"></a>
								</div>
								<div class="col-4 col-md-4">
									<a href="https://www.instagram.com/haricodeoficial/" target="_blank" class="img" style="background-image: url(<?php echo $url;?>vistas/img/instagram/img6.png);"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5 pt-4 border-top">
          <div class="col-md-6 col-lg-8">
            <p class="copyright">Todos los derechos reservados Haricode.com</p>
          </div>
      
        </div>
			</div>
		</footer>