<?php 
include("../static/header.php");
?>
<script type="text/javascript" src="/xampp/14-octubre/src/js/alertas.js" ></script>
    
    <h2>Lista de Usuarios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php

        $mysqli = new mysqli("localhost", "root", "123456789", "pfinal");
        
        $result = $mysqli->query("SELECT * FROM usuarios");
        $row_cnt = $result->num_rows;

        if ($row_cnt> 0) {
            while ($row = $result->fetch_assoc()) {

                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["usuario"] . "</td><td>" . $row["contrasena"] . "</td>";
                echo "<td><button><a href='update.php? id=" . $row["id"] . " '>Actualizar</a></button> | <button class='botones'><a  class='delete' href='delete.php?id=" . $row["id"] . "'>Eliminar</a></button></td></tr>";
            
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron usuarios.</td></tr>";
        }
        ?>
    </table>
</body>
</html>