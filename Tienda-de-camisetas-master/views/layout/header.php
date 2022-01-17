<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="container">
    <!--header-->
        <header id="header">
            <div id="logo">
                <img src="img/camiseta.png" alt="camiseta-logo">
                <a href="<?=base_url?>">Tienda de camisetas</a>
            </div>
        </header>
    
        <!--menu-->
        <?php $categorias = Utils::showCategorias(); ?>

        <nav id="menu">
            <ul>
                <li><a href="<?=base_url?>"> Inicio</a></li>
                <?php while($cat = $categorias->fetch_object()) : ?>
                    <li><a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre;?></a></li>
                <?php endwhile;?>
            </ul>
        </nav>
    
        <div id="content">