<?php 

require_once("modelo/usuarios_modelo.php");

$datosUsuarios = new Usuarios_modelo();
$matrizUsuarios = $datosUsuarios->get_datos_usuarios();

require_once("vista/datos_usuarios_view.php");

?>