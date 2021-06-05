<link rel="stylesheet" href="per.css">
<div class="contenedor">
    <table>
        <thead>
            <tr class="p">
                <th></th><th>PERFILES</th><th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="pp">
                <th>Nombre del usuario</th>
                <th>Correo electrónico del usuario</th>
                <th>Contraseña del usuario</th>
            </tr>
            <?php
            $con=mysqli_connect('localhost','root','','registro') or die ('Error en la conexion');  
            $sql="SELECT * FROM datos";  
            $resultado=mysqli_query($con,$sql) or die ('Error en el query database');

            if( $resultado ){
            if( mysqli_num_rows( $resultado ) > 0){

            while($fila = mysqli_fetch_array( $resultado ) ){
          
                echo "<tr>";
                    echo "<td>".$fila['Usuario']."</td>";
                    echo "<td>".$fila['Correo']."</td>";
                    echo "<td>".$fila['Contraseña']."</td>";
                echo "</tr>";
            }
        }
                mysqli_free_result( $resultado );
                mysqli_close( $con );
            }
            ?>
        </tbody>
    </table>
</div>