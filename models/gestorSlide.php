<?php 

class GestorSlideModel{

	#LISTAR LOS PROYECTOS QUE ESTAN EN EL SLICE
	#-------------------------------------------
	public function listarSlideModel($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT s.idSlice, s.idProject, p.name, p.image FROM $tabla as s, projects as p WHERE s.idProject = p.idProject");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();
	}


	#BUSCAR EL SLIDE MENOR
	#------------------------------------------
	public function buscarSlideMenor($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT min(idSlice) FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();
	}

}