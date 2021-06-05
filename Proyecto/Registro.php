<!DOCTYPE html>
<html lang="en">
<head>
    <title>Datos</title>
    <link rel="stylesheet" href="edit.css">
	<style type="text/css">
    *{
    background: #4568DC;
}
.form{
    background: #fff;
    color: black;
}
.form h3{
    background: #fff;
}
.but{
    background:#fff;
    border-color:#4568DC;
}
.form label{
    background:#fff;
}
	.boto{
    width: 100%;
    height: 50px;
	margin: 15px 4px;
	font-size:15px;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration:none;
	background: #4568DC;
    color: white;
	}
	.boto:hover{
    background: #1154a1;
	}
    .tp{
        background: #fff;
        color: black;
        text-align: center;
    }
    .link{
    display: block;
    width: auto;
    height: auto;
	margin: auto;
	font-size:20px;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration:none;
	background: #4568DC;
    color: white;
    }
    .link:hover{
    background: #1154a1;
	}
	</style>
</head>
<body>
    <form action="insertdata.php" method="POST" class="form">
        <h3>Registro</h3>
        <label id="nombre">USUARIO: </label>
        <input type="text" name="usuario" placeholder="vic123" class="but" id="usuario" required/>
        <br>
        <label id="correo">EMAIL: </label>
        <input type="email" name="email" placeholder="correo@correo.com" class="but" id="correo" required/>
<br>
        <label id="pass">CONTRASEÑA: </label>
        <input type="password" name="password" class="but" id="password" required/>
<br>
        <button type="submit" class="boto">Registrarte</button>
		<p class="tp">Ya tienes una cuenta?</p>
        <center><a class="link" href="login.php">Inicia Sesion</a></center>
      </form>
</body>
</html>