<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../estilos.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="../../index.php">Inicio</a></li>
            <li><a href="read.php">Lista de Usuarios</a></li>
        </ul>
    </nav>
</header>
    <h2>Actualizar Usuario</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="nombre">Nuevo Nombre:</label>
        <input type="text" name="nombre" value="<?= $row['nombre'] ?>" required>
        <br>
        <label for="email">Nuevo Email:</label>
        <input type="email" name="email" value="<?= $row['email'] ?>" required>
        <br>
        <input type="submit" name="update" value="Actualizar Usuario">
    </form>
</body>
</html>

