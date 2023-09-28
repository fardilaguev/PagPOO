<?php

include 'autor.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$libr_leidos = $_POST['libr_leidos'];
$libr_guardados = $_POST['libr_guardados'];
$libr_publicados = $_POST['libr_publicados'];

$autor = new Autor($nombres, $apellidos, $edad, $correo, $contraseña, $libr_leidos, $libr_guardados, $libr_publicados);
$autor->mostrarautor();