<?php
require_once('carro.php');
use Codehero\Cursos;

// Ya no es necesario utilizar toda la ruta porque PHP intenta buscar
// en los namespaces que se esten usando, en este caso el global y el
// Codehero\Cursos.

$carro = Carro::rodar();
$constante = CONSTANTE;


