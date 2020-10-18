<?php
require_once 'controladores/controlador.plantilla.php';
$plantilla = new plantilla();

$usuarioVioleta = new usuario('violeta','castelan','pañales',20);
$usuarioVioleta -> nombreCompleto('Andres');
?>