<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php
$vivienda = "";
$viv ="";
$zona = "";
$zo = "";
$num = ""; //precio
$n = "";
$archivo ="";
$ar ="";
$ob ="";
$observaciones ="";
$tamanio ="";
$tam ="";
$ex ="";
$extra ="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["vivienda"])) {
    $viv = "viv is required";
  } else {
    $vivienda = test_input($_POST["vivienda"]);
    // comprueba si es texto o espacio blanco
    if (!preg_match("/^[a-zA-Z-' ]*$/",$vivienda)) {
      $viv = "vivienda invalida";
    }
  }

  if (empty($_POST["zona"])) {
    $zo = "zona is required";
  } else {
    $zona = test_input($_POST["zona"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$zona)) {
        $zo = "zona invalida";
      }
    }
  

  
  if (empty($_POST["num"])) {
    $n = "number is required";
  } else {
    $num = test_input($_POST["num"]);
    // mira si es valido el num
    if (!filter_var($num, FILTER_VALIDATE_INT)) {
      $n = "numero invalido";
    }
  }
  //tam
  if (empty($_POST["num"])) {
    $tam = "number is required";
  } else {
    $tamanio = test_input($_POST["tam"]);
    // mira si es valido el num
    if (!filter_var($tamanio, FILTER_VALIDATE_INT)) {
      $tam = "numero invalido";
    }
  }
  //extra
  if (empty($_POST["extra"])) {
    $ex = "extra is required";
  } else {
    $extra = test_input($_POST["extra"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$zona)) {
        $ex = "extra invalida";
      }
    }

    //Si se quiere subir una imagen
    if (isset($_POST['archivo'])) {
    //Recogemos el archivo enviado por el formulario
    $archivo = $_FILES['archivo']['name'];
    //Si el archivo contiene algo y es diferente de vacio
    if (isset($archivo) && $archivo != "") {
       //Obtenemos algunos datos necesarios sobre el archivo
       
       $tamano = $_FILES['archivo']['size'];
       
       //Se comprueba si el archivo a cargar es correcto observando su tamaño
      if (!($tamano < 2000000)) {
         echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
      }
      else {
         //Si la imagen es correcta en tamaño
         //Se intenta subir al servidor
         $imagenes = [];
         //array de imagenes
         if (move_uploaded_file($temp, 'fotos/'.$archivo)) {
             //Meto imagen en el array de imagenes
             if($gestor = opendir("./fotos")){   //abre el archivo
                 while(($archivo = readdir($gestor))){   //mientras queden archivos en la carpeta sin leer...
                     if($archivo != '.' && $archivo != '..'){    //evita el directorio padre y el mismo
                         $imagenes[] = $archivo;
                     }
                 }
             }else{
                 echo "Error al abrir el directorio<br>";
             }
             //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
             chmod('fotos/'.$archivo, 0777);
             //Mostramos el mensaje de que se ha subido co éxito
             echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
             //Mostramos la imagen subida
             //echo '<p><img src="fotos/'.$archivo.'"></p>';
             foreach($imagenes as $valor){
                 echo '<p><img src="fotos/'.$valor.'"></p>';
             }
         }
         else {
            //Si no se ha podido subir la imagen, mostramos un mensaje de error
            echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
         }
 
       }
    }
 }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Insercion de vivienda</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<label for="vivienda">Tipo de vivienda</label><br>
            <select name="vivienda">
                <option value="pi" selected>Piso</option>
                <option value="ad">Adosado</option>
                <option value="ch">Chalet</option>
                <option value="ca">Casa</option>
            </select><br>
    <label for="zona">Zona</label><br>
            <select name="zona">
                <option value="cen" selected>Centro</option>
                <option value="za">Zaidin</option>
                <option value="cha">Chana</option>
                <option value="cha">Chana</option>
                <option value="cha">Chana</option>
                <option value="cha">Chana</option>
                <option value="cha">Chana</option>
            </select><br>
            <span class="error">* <?php echo $zo;?></span>

        <!-- se me ha olvidado direccion pero seria parecido a los otros como observacion pero con otro tipo de validacion-->
            <p>numero de dormitorios</p>
            <input type="radio" name="num" value="1">
            <label for="num">1</label>
                
            <input type="radio" name="num" value="2">
            <label for="num">2</label>
            
            <input type="radio" name="num" value="3">
            <label for="num">3</label>

            <input type="radio" name="num" value="3">
            <label for="num">4</label>

            <input type="radio" name="num" value="3">
            <label for="num">5</label><br>
            <span class="error">* <?php echo $n;?></span>
            
            <label for="precio">precio: </label>
            <input type="number" name="precio">
            <span class="error">* <?php echo $n;?></span><br>
            
            <label for="tam">tamaño: </label>
            <input type="text" name="tam"><br>
            <?php echo $tam;?></span>
            <!--validacion de tamoaño si me da tiempo -->

            <p>extras:</p>
            <input type="checkbox" name="extra">
            <label for="extra">piscina</label>
            <input type="checkbox" name="extra">
            <label for="extra">jardin</label>
            <input type="checkbox" name="extra">
            <label for="extra">garaje</label>
            <?php echo $ex;?></span><br>
            <!--validacion de extras si me da tiempo -->

            Añadir imagen: <input name="archivo" id="archivo" type="file"/>
            <span class="error">* <?php echo $ar;?></span><br>
            <br><br>

            <label for="obs">observaciones: </label>
            <input type="text" name="obs">
            <span class="error">* <?php echo $ob;?></span><br>

            
            <input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
if(($viv=="") && ($zo=="") && ($n=="") && ($ar=="") && ($ob=="") && ($tam=="") && ($ex=="")){
  echo $vivienda;
  echo "<br>";
  echo $zona;
  echo "<br>";
  echo $num;
  echo "<br>";
  echo $archivo;
  echo "<br>";
  echo $observaciones;
  echo "<br>";
  echo $extra;
  echo "<br>";
  echo $tamanio;
  echo "<br>";
  
}
?>

</body>
</html>