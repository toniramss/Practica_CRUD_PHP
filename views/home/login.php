<?php
    require_once('../../config/Database.php');

    $usuarios = selectUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../../public/styles/style.css" rel="stylesheet">
</head>
<body class="bg-red-500">

    <div class="flex flex-col items-center justify-center">

        <img src="../../public/img/usuario.png">

        <label>Nombre de usuario:</label>
        <input type="text">

        <label>Contraseña:</label>
        <input type="password">

        <button>Log In</button>

    </div>

    <div>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>

                <?php foreach ($usuarios as $usuario) { ?>

                    <tr>
                        <td><?php echo $usuario['idUser']?></td>
                        <td><?php echo $usuario['userName']?></td>
                    </tr>

                <?php } ?>
            </tr>
        </table>
    </div>

    
</body>
</html>