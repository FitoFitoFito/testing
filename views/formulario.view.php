<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS 3RD Party -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="bg-dark text-light py-5">
        <p class="display-3 text-center">Formulario de contacto</p>
    </header>

    <main class="container my-5">
        <h1 class="text-center mb-4">FORMULARIO</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name="formulario" id="formulario">

            <input type="text" id="nombre" name="nombre" placeholder="Escribe el nombre" class="form-control mb-2" value="<?php if(isset($nombre)) echo $nombre ?>">
            <input type="text" id="correo" name="correo" placeholder="Escribe el correo" class="form-control mb-2" value="<?php if(isset($correo)) echo $correo ?>">

            <textarea name="comentario" id="comentario" cols="30" rows="10" class="form-control mb-2"><?php if(isset($_POST['comentario'])) echo $comentario; ?></textarea>

            <ul>
                <?php if(isset($errores)): ?>
                    <?php echo $errores; ?>
                <?php endif ?>
            </ul>

            <div>
                <?php if(isset($enviado) && $enviado === true): ?>

                    <?php echo '<strong style="color:green;">El formulario se ha enviado correctamente</strong>'; ?>

                <?php elseif(isset($enviado) && $enviado === false): ?>

                    <?php echo '<strong style="color: red;">El formulario no se ha podido enviar</strong>'; ?>

                <?php endif ?>
            </div>

            <button id='button' type="submit" class="btn btn-danger form-control" name="submit">Enviar</button>
        </form>
    </main>
</body>
</html>