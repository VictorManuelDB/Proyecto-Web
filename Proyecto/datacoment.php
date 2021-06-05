<?php
			
			if(isset($_POST['usuario'])){
				$nombre = $_POST['usuario'];
                $comen = $_POST['comentario'];
				
				$campos = array();
				
				if($nombre == ""){
					array_push($campos, "El campo Usuario no pude estar vacío");
				}

                if($comen == ""){
					array_push($campos, "El campo Comentario no pude estar vacío");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
                    
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
<?php
	require "datos.php";
			$nombre = $_POST["usuario"];
			$comen = $_POST["comentario"];
			
			$insert = "INSERT INTO comentarios VALUES('$nombre','$comen')";
			$query = mysqli_query ($conect,$insert);
			
			if($query){
                echo "DATOS GUARDADOS";
                header("location:contacto.php");
			}
			else{
				echo "EJECUCION INCORRECTA";
			}
			
?>