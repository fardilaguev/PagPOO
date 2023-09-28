<?php

include 'libro.php';

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];
$descripcion = $_POST['descripcion'];
$cant_paginas = $_POST['cant_paginas'];

$libro = new Libro($nombre, $genero, $autor, $descripcion, $cant_paginas);
$libro->mostrarlibro();