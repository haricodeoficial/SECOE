<?php
class controladorHackathon{
	public function plantilla(){
		include "vistas/plantilla.php";
	}
	static public function mostrarCategorias($item, $valor){
		$tabla = "categorias";
		$respuesta = modeloHackathon::modeloHackathonDatos($tabla, $item, $valor);
		return $respuesta;
	}
	static public function mostrarNoticias($item, $valor){
		$tabla = "noticias";
		$respuesta = modeloHackathon::modeloHackathonDatos($tabla, $item, $valor);
		return $respuesta;
	}
}
?>