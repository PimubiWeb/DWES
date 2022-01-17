<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">Crear Producto</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "complete" ) :?>
    <strong class="alert-green">El producto se ha creado correctamente.</strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != "complete" ) :?>
    <strong class="alert-red">El producto NO se ha creado.</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto');?>


<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == "complete" ) :?>
    <strong class="alert-green">El producto se ha BORRADO correctamente.</strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != "complete" ) :?>
    <strong class="alert-red">El Producto NO se ha BORRADO.</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete');?>


<table>
<tr> 
    <th>ID</th>
    <th>NOMBRE</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Acciones</th>
</tr>
    <?php while($prod = $productos->fetch_object()) : ?>
        <tr> 
            <td><?=$prod->id;?></td>   
            <td><?=$prod->nombre;?></td>
            <td><?=$prod->precio;?></td>
            <td><?=$prod->stock;?></td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$prod->id?>" class="button button-gestion button-green">Editar</a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$prod->id?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile;?>
</table>