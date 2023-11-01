<?php 
include_once("src/static/header.php");
?>

    <div class="formu">
        <h2>Iniciar sesion</h2>
        <form action="index.php" method="post">

            <div class="llenado">
                <!-- bloques para labels -->
                <div class="bloque">
                    <label for="usuario">Usuario:</label>
                    <br>
                    <label for="contrasena">Contraseña:</label>                                                                         
                </div>
                <!-- pa las contras -->
                <div class="bloque">
                    <input type="text" name="usuario" id="usuario" required>                                              
                    <br>
                    <input type="password" name="contrasena" id="contrasena" required> 
                </div>           
            </div>
            <br>
            <div class="botones">

                <!-- Boton iniciar sesion-->
                <input type="submit" name="submit" value="Iniciar sesion">
                <!-- Boton registrar cuenta-->
                <a href="/xampp/14-octubre/src/php/crearCuenta.php">
                    <input type="button" value="Registrarse">
                </a>

            </div>            

        </form>
        <!-- la siguiente seccion comprueba si el usuario ingresado en el login existe -->
            <?php  
            include 'src/php/config.php';
                if (!empty($_POST ["submit"])) {
                    
                    $usuario = $_POST["usuario"];
                    $contrasena = $_POST["contrasena"];

                    $sql=$conn->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
                    if($datosLog=$sql->fetch_object()){
                        header("location: /xampp/14-octubre/src/php/read.php ");
                    }else{
                        echo"<div class='llenado' >Acceso denegado</div>";
                    }

                }    
            ?>                    

    </div>

</body>
</html>