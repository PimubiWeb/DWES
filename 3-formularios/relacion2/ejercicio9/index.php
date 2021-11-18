<?php
//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) { //hackable
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        $imagenes = [];
        //array de imagenes
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            //Meto imagen en el array de imagenes
            if($gestor = opendir("./images")){   //abre el archivo
                while(($archivo = readdir($gestor))){   //mientras queden archivos en la carpeta sin leer...
                    if($archivo != '.' && $archivo != '..'){    //evita el directorio padre y el mismo
                        $imagenes[] = $archivo;
                    }
                }
            }else{
                echo "Error al abrir el directorio<br>";
            }
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('images/'.$archivo, 0777);
            //Mostramos el mensaje de que se ha subido co éxito
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            //echo '<p><img src="images/'.$archivo.'"></p>';
            foreach($imagenes as $valor){
                echo '<p><img src="images/'.$valor.'"></p>';
            }
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
           echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }

      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U3_R2_EJ8</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" enctype="multipart/form-data"/>
    Añadir imagen: <input name="archivo" id="archivo" type="file"/>
    <input type="submit" name="subir" value="Subir imagen"/>
    </form>
</body>
</html>