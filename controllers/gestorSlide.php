<?php 

class GestorSlide{

	#LISTAR SLIDE
	#---------------------------------
	public function slide(){

		$buscar = GestorSlideModel::listarSlideModel('slice');
		// var_dump($buscar[0]);

		$posicion = GestorSlideModel::buscarSlideMenor('slice');
		$menor = $posicion[0];

		foreach ($buscar as $key => $item) {
			$ruta = 'backend/'.$item["image"];
			
			if($item["idSlice"] == $menor){
				echo '<a href="index.php?action=detail&idProy='.$item["idProject"].'" class="carousel-item active" style="background-image: url('.$ruta.')"></a>';
			}else{
				echo '<a href="index.php?action=detail&idProy='.$item["idProject"].'" class="carousel-item" style="background-image: url('.$ruta.')"></a>';
			}

		}

		
	}

}