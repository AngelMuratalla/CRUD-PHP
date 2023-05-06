<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="../src/css/login.css">
    <link rel="stylesheet" href="../src/css/register.css">
</head>
<body>
    <main>
        <?php 
            $name = $_GET['name'];
            $address = $_GET['address'];
            $phone = $_GET['phone-number'];
            $username = $_GET['username'];
        ?>
        <div class="login-box register-box">
            <img src="../src/images/logo.png" class="avatar" alt="Avatar Image">
            <h1>Actualizar</h1>
            <form action="../src/php/update/update.php" method="post">
                 <!-- USERNAME INPUT -->
                 <label for="username">Nombre de usuario</label>
                <?php 
                echo '<input type="text" name="username" placeholder="Ingresa tu usuario" id="username" value="'.$username.'" readonly>';
                ?>
                <!-- NAME INPUT -->
                <label for="name">Nombre completo</label>
                <?php 
                echo '<input type="text" name="name" placeholder="Ingresa tu nombre completo" id="name" value=" '. $name . '" required>';
                ?>
                <!-- ADDRESS INPUT -->
                <label for="address">Dirección</label>
                <?php 
                echo '<input type="text" name="address" placeholder="Ingresa tu dirección" id="address"  value="'.$address.'" required>';
                ?>
                <!-- PHONE NUMBER INPUT -->
                <label for="phone-number">Teléfono</label>
                <?php 
                echo '<input type="text" name="phone-number" placeholder="Ingresa tu número de teléfono" id="phone-number" value="'.$phone.'" required>';
                ?>
                <!-- BUTTONS -->
                <input type="submit" value="Actualizar">
                <a href="./registros.php">Cancelar</a>
            </form>
        </div>
    </main>
</body>
</html>