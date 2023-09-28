<?php

include 'admin.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$acep_autor = $_POST['acep_autor'];
$elim_libro = $_POST['elim_libro'];
$elim_lector = $_POST['elim_lector'];
$elim_autor = $_POST['elim_autor'];

$admin = new Admin($nombres, $apellidos, $correo, $contraseña, $acep_autor, $elim_libro, $elim_lector, $elim_autor);
$admin->mostraradmin();