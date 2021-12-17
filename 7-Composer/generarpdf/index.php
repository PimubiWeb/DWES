<?php 
//caragamos el autoload
require "../vendor/autoload.php"; 
//require __DIR__."/vendor/autoload.php";

//Utilizar la libreria
use Dompdf\Dompdf;

$d = new Dompdf();
$d->loadHtml('<h1>que pasa compare</h1>');
$d->render();
$d->stream();