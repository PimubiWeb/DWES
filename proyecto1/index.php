<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proyecto php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require_once 'requires/cabecera.php';?>
    <?php require_once 'requires/lateral.php';?>
    
    <h1>Ultimas entradas</h1>
    <div class="entradas">
        <article class="entrada">
            <h2>Titulo de mi entrada</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis dicta voluptatum dolor quibusdam molestias totam. Hic, illum, rem voluptatibus quo sequi tempore laboriosam nisi dignissimos aliquam quisquam sint. Recusandae.</p>
        </article>
        <article class="entrada">
            <h2>Titulo de mi entrada2</h2>
            <p>Pokemon la nueva serie mejor vista en todo japon.</p>
        </article>
    </div>
    <div id="todas">
        <a href="">Ver todas las entradas </a>
    </div>
    
</body>
</html>