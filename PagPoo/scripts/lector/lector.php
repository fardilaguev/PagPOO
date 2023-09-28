<?php
class lector {
    public $nombres;
    public $apellidos
    public $edad;
    public $correo;
    public $contraseña;
    public $libr_leidos;
    public $libr_guardados;

    public function __construct($nombres, $apellidos, $edad, $correo, $contraseña, $libr_leidos, $libr_guardados) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
        $this->libr_leidos = $libr_leidos;
        $this->libr_guardados = $libr_guardados;
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

    public function getedad() {
        return $this->edad;
    }

    public function setedad($edad) {
        $this->edad = $edad;
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

    public function getlibr_leidos() {
        return $this->libr_leidos;
    }

    public function setlibr_leidos($libr_leidos) {
        $this->libr_leidos = $libr_leidos;
    }

    public function getlibr_guardados() {
        return $this->libr_guardados;
    }

    public function setlibr_guardados($libr_guardados) {
        $this->libr_guardados = $libr_guardados;
    }


    public function mostrarlector() {
        echo "<p>Nombres: ".$this->nombres."</p>";
        echo "<p>Apellidos: ".$this->apellidos."</p>";
        echo "<p>Edad: ".$this->edad."</p>";
        echo "<p>Correo Electronico: ".$this->correo."</p>";
        echo "<p>Contraseña: ".$this->contraseña."</p>";
        echo "<p>Libros leidos: ".$this->libr_leidos."</p>";
        echo "<p>Libros guardados: ".$this->libr_guardados."</p>";
    }

}