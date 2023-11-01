<?php 
include_once("../static/header.php");
?>
   
   <div class="formu">        
            <div> <h2>Actualizar usuario</h2>
            
            <form action="index.php" method="post">

                <div class="llenado">
                    <!-- bloques para labels -->
                    <div class="bloque">
                        <label for="Nusuario">Nuevo usuario:</label>
                        <br>
                        <label for="Ncontrasena">Nueva contraseña:</label>                                                                      
                    </div>
                    <!-- pa las contras -->
                    <div class="bloque">
                        <input type="text" name="Nusuario" id="Nusuario" required>                                              
                        <br>
                        <input type="password" name="Ncontrasena" id="Ncontrasena" required> 
                    </div>           
                </div>
                <br>
                <div class="botones">

                    <!-- Boton iniciar sesion-->
                    <input type="submit" name="submit" value="Actualizar usuario">
                    <!-- Boton registrar cuenta-->                    
                    </a>

                </div>            

            </form>
            </div>
       
   </div>


</body>
</html>

