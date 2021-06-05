<link rel="stylesheet" href="comen.css">
<div class="contenedor">
    <h2>Comentarios</h2>
    <table>
        <tbody>
            <tr class="pp">
                <th>Usuario</th>
                <th>Comentario</th>
            </tr>
            <?php
            $con=mysqli_connect('localhost','root','','comenta') or die ('Error en la conexion');  
            $sql="SELECT * FROM comentarios";  
            $resultado=mysqli_query($con,$sql) or die ('Error en el query database');

            if( $resultado ){
            if( mysqli_num_rows( $resultado ) > 0){

            while($fila = mysqli_fetch_array( $resultado ) ){
          
                echo "<tr>";
                    echo "<td>".$fila['Usuario']."</td>";
                    echo "<td>".$fila['mensaje']."</td>";
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
