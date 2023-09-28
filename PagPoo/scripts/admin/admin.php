<?php
class admin {
    public $nombres;
    public $apellidos;
    public $correo;
    public $contraseña;
    public $acep_autor;
    public $elim_libro;
    public $elim_lector;
    public $elim_autor;

    public function __construct($nombres, $apellidos, $correo, $contraseña, $acep_autor, $elim_libro, $elim_lector, $elim_autor) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->corre = $correo;
        $this->contraseña = $contraseña;
        $this->acep_autor = $acep_autor;
        $this->elim_libro = $elim_libro;
        $this->elim_lector = $elim_lector;
        $this->elim_autor = $elim_autor;
    }


    public function getnombres() {
        return $this->nombres;
    }

    public function setnombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getapellidos() {
        return $this->apellidos;
    }

    public function setapellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getcorreo() {
        return $this->correo;
    }

    public function setcorreo($correo) {
        $this->correo = $correo;
    }

    public function getcontraseña() {
        return $this->contraseña;
    }

    public function setcontraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    public function getacep_autor() {
        return $this->acep_autor;
    }

    public function setacep_autor($acep_autor) {
        $this->acep_autor = $acep_autor;
    }

    public function getelim_libro() {
        return $this->elim_libro;
    }

    public function setelim_libro($elim_libro) {
        $this->elim_libro = $elim_libro;
    }

    public function getelim_lector() {
        return $this->elim_lector;
    }

    public function setelim_lector($elim_lector) {
        $this->elim_lector = $elim_lector;
    }

    public function getelim_autor() {
        return $this->elim_autor;
    }

    public function setelim_autor($elim_autor) {
        $this->elim_autor = $elim_autor;
    }


    public function mostraradmin() {
        echo "<p>Nombres: ".$this->nombres."</p>";
        echo "<p>Apellidos: ".$this->apellidos."</p>";
        echo "<p>Correo: ".$this->correo."</p>";
        echo "<p>Contraseña: ".$this->contraseña."</p>";
        echo "<p>Aceptar autores: ".$this->acep_autor."</p>";
        echo "<p>Eliminar libro: ".$this->elim_libro."</p>";
        echo "<p>Eleminar lector: ".$this->elim_lector."</p>";
        echo "<p>Eleminar autor: ".$this->elim_autor."</p>";
    }

}