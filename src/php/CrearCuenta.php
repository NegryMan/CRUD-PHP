<?php 
include_once("../static/header.php");
?>

<!-- reguistro -->
<div class="formu">
        <h2>Agregar usuario</h2>
        <br>
        <form action="CrearCuenta.php" method="post">

            <div class="llenado">
                <div class="bloque">
                    <label for="usuario">Crear usuario:</label>
                    <br>
                    <label for="contrasena">Crear contraseña:</label>            

                </div>

                <div class="bloque">
                    <input type="text" name="usuario" value="" required>
                    <br>
                    <input type="password" name="contrasena" value="" required>
                    <br>
                </div>
            </div>

            <div class="botones"><input type="submit" name="submit" value="Registrarse"></div>

        </form>
    </div>

    <?php
    include 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $usuario = $_POST['usuario'];
        $contra = $_POST['contrasena'];
            
        // Nombre de la tabla
        $tableName = "usuarios";
                
        // Verificar si existe la tabla, sino crear
        $sql = "SHOW TABLES LIKE '$tableName'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 0) {
            $createTableSQL = "CREATE TABLE $tableName 
            (id INT AUTO_INCREMENT PRIMARY KEY,
            usuario VARCHAR(255),
            contrasena CHAR(64) NOT NULL)";
    
            if ($conn->query($createTableSQL) === TRUE) {
                echo "Tabla $tableName creada con éxito.";
            } else {
                echo "Error al crear la tabla: " . $conn->error;
            }
        }
        //insertar datos

        $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contra')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuario creado con éxito";
        } else {
            echo "Error al crear el usuario: " . $conn->error;
        }
        header("Location: /xampp/14-octubre/index.php");

    }//termina primer if
    ?>
</body>
</html>