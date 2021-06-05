<link rel="stylesheet" href="cont.css">
<style type="text/css">
    #regresar{
    margin: 7px 80px;
    padding-left: 50px;
    padding-right: 50px;
    height: 40px;
    font-size: 20px;
    text-decoration: none;
    color: #000;
    background-color: #1378BE;
    border: #1378BE;
}
#regresar:hover{
    background-color: #B3D8E8;
}
</style>
<a href="index1.php" id="regresar"><-REGRESAR</a>
<div>
    <form action="datacoment.php" method="POST">
        <label for="" id="nom">Nombre de usuario:</label><br>
        <input type="text" placeholder="vic123" name="usuario" class="inputs" id="nom"required><br>
        <label for="" id="nom">Comentario:</label><br>
        <input type="text" name="comentario" class="inputs" id="input"required><br>
        <button type="submit" id="but">Guardar</button><br>
        <a href="comentarios.php" id="link">Comentarios</a>
    </form>
</div>