<?php
			
			if(isset($_POST['usuario'])){
				$nombre = $_POST['usuario'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$campos = array();
				
				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

                if($email == "" || strpos($email, "@") === false){
                    array_push($campos, "Ingresa un correo electrónico válido.");
                }

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
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
	require "data.php";
			$iduser = $_POST;
			$nombre = $_POST["usuario"];
			$correo = $_POST["email"];
			$pass = $_POST["password"];
			
			$insert = "INSERT INTO datos VALUES('$iduser','$nombre','$correo','$pass')";
			$query = mysqli_query ($conect,$insert);
			
			if($query){
				header("location: index1.php"); 
				include "index1.php";
			}
			else{
				echo "EJECUCION INCORRECTA";
			}
			
?>