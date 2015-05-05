<?php

require_once('carro.php');

// Como no hay un namespace definido en este archivo
// tenemos que llamar a la constante y la función todo
// el namespace completo (ruta absoluta).
// Siempre que utilicemos un namespace directamente
// hay que empezar con un \ slash invertido

$carro = \Codehero\Cursos\Carro::rodar();
$constante = \Codehero\Cursos\CONSTANTE;



