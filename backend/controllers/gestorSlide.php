<?php 

class GestorSlide{

	#LISTAR LOS PROYECTOS PARA EL SELECT
	#-------------------------------------------------
	public function listarProyectos(){

		$proyects = GestorSlideModel::mostrarProyectos("projects");

		foreach ($proyects as $key => $item) {
			echo '<option value="'.$item["idProject"].'">'.$item["name"].'</option>';
		}

		
	}


	#GUARDAR LOS PROYECTOS EN LA TABLA SLICE
	#---------------------------------------------
	public function guardarSlice(){
		if(isset($_POST["proyectsSlice"])){

			$proyects = $_POST["proyectsSlice"];
			// print_r($proyects);


			for ($i=0; $i<count($proyects); $i++){     
				// echo "<br> Proyecto " . $i . ": " . $proyects[$i];
				$idProject = $proyects[$i];
				$guardar = GestorSlideModel::guardarSliceModel($idProject, "slice");

			}

				if($guardar == "ok"){

					echo'<script>

						swal({
							  title: "¡OK!",
							  text: "¡El Slice ha sido actuaizado correctamente!",
							  type: "success",
							  confirmButtonText: "Ok"	  
						}).then(function(){
						    window.location = "slide";
						});
						
					</script>';

				}

				else{

					echo $respuesta;

				}

		}
	}


	#LISTAR LOS PROYECTOS GUARDADOS EN LA TABLA SLIDE
	#----------------------------------------------------
	public function listarSlides(){

		$respuesta = GestorSlideModel::listarSlideModel("slice");
		// var_dump($respuesta);
		foreach ($respuesta as $key => $item) {
			echo'<tr>
					<td>'.$item["name"].'</td>
					<td>
						<img src="'.$item["image"].'" class="rounded text-center" height="auto" width="150" />
					</td>
					<td>
						<a class="btn btn-danger" href="index.php?action=slide&idDel='.$item["idProject"].'">
	                  		<i class="fas fa-trash-alt"></i>
	                  	</a>
					</td>
				</tr>';
		}
	}



	#QUITAR SLIDE DE LA TABLA PRINCIPAL 
	#---------------------------------------------------------
	public function quitarSlide(){
		if(isset($_GET["idDel"])){
			$idDel = $_GET["idDel"];

			$buscar = GestorProyectoModel::buscarProyectoModel($idDel, "projects");
			// var_dump($buscar);

			echo '<script>
				swal({
				  title: "Esta seguro de quitar al proyecto '.$buscar["name"].' del slide?",
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonColor: "#3085d6",
				  cancelButtonColor: "#d33",
				  confirmButtonText: "Si, Estoy Seguro!"
				}).then((result) => {
				  if (result.value) {
				    window.location.href="?action=slide&idBor='.$buscar["idProject"].'"
				  }else{
				  	 window.location = "slide";
				  }
				})
				</script>';
		}

		if(isset($_GET["idBor"])){
			
			$idBorrar = $_GET["idBor"];

			$buscar =  GestorProyectoModel::buscarProyectoModel($idBorrar, "projects");
			$eliminar = GestorSlideModel::eliminarSlideModel($idBorrar, "slice");

			// var_dump($respuesta);

			echo 	'<script>
						swal({
						  title: "El proyecto '.$buscar["name"].' ha sido removido del slide?",
						  text: "Fue Removido!",
						  type: "success",
						  confirmButtonText: "Removido"
						}).then(function(){
						    window.location = "slide";
						});
					</script>';

		}

	}

}