<?php
require_once "conexion.php";
class modeloHackathon{
	static public function modeloHackathonDatos($tabla, $item, $valor){
		if ($item != null) {
		$stmt = conexionBaseDeDatos::conectar()->prepare("SELECT *FROM $tabla WHERE $item = :$item");
		$stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);
		$stmt -> execute();
		return $stmt -> fetch();
		}
		else{
			$stmt = conexionBaseDeDatos::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt ->fetchAll();
		}
$stmt -> close();
$stmt = null;

	}
	
	static public function datoTerreno($id){
		$stmt = conexionBaseDeDatos::conectar()->prepare("SELECT CondicionTerreno FROM terrenojalisco WHERE id = $id");
		$stmt -> execute();
		return $stmt -> fetch();
		$stmt -> close();
		$stmt = null;
	}
}