<?php
/*
// abrir un fichero en modo lectura ( como en linux r lectura , x de ejecución , w de lectura
//$archivo = fopen("fichero_texto.txt", "r"); de esta forma se abre sólo de lectura
$archivo = fopen("fichero_texto.txt", "a+"); // de esta forma podemos escribir y leer lo que hay en el archivo

//leer el contenido del archivo de todas las líneas
// necesito un bucle que lo recorra mientras no sea el fin del archivo
while (!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

// escribir dentro de un archivo
fwrite($archivo,"  y este texto se introduce desde PHP");

// cerrar un archivo
fclose($archivo);

*/
// copiar un fichero de texto
//copy("fichero_texto.txt", "fichero_copiado.txt")or die("error al copiar");
// renombrar un fichero
//rename("fichero_copiado.txt", "fichero_renombrado.txt");
// eliminar un archivo
//unlink("fichero_renombrado.txt")or die('error al borrar');

//  comprobar si un fichero existe
if (file_exists("fichero_texto.txt")){
    echo "El archivo existe";
} else{
   echo"El archivo no existe"; 
}
    


