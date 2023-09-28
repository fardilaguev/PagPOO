<?php
class libro {
    public $nombre;
    public $genero;
    public $autor;
    public $descripcion;
    public $cant_paginas;

    public function __construct($nombre, $genero, $autor, $descripcion, $cant_paginas) {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->autor = $autor;
        $this->descripcion = $descripcion;
        $this->cant_paginas = $cant_paginas;
    }


    public function getnombre() {
        return $this->nombre;
    }

    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getgenero() {
        return $this->genero;
    }

    public function setgenero($genero) {
        $this->genero = $genero;
    }

    public function getautor() {
        return $this->autor;
    }

    public function setautor($autor) {
        $this->autor = $autor;
    }

    public function getdescripcion() {
        return $this->descripcion;
    }

    public function setdescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getcant_paginas() {
        return $this->cant_paginas;
    }

    public function setcant_paginas($cant_paginas) {
        $this->cant_paginas = $cant_paginas;
    }


    public function mostrarlibro() {
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Genero: ".$this->genero."</p>";
        echo "<p>Autor: ".$this->autor."</p>";
        echo "<p>descripcion: ".$this->descripcion."</p>";
        echo "<p>Cantidad de paginas: ".$this->cant_paginas."</p>";
    }

}