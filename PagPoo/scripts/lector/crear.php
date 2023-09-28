<?php

include 'lector.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$libr_leidos = $_POST['libr_leidos'];
$libr_guardados = $_POST['libr_guardados'];

$lector = new Lector($nombres, $apellidos, $edad, $correo, $contraseña, $libr_leidos, $libr_guardados);
$lector->mostrarlector();