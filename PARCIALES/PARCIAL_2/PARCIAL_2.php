<?php
    interface Prestable 
    { 
        public function obtenerDetallesPrestamo();
    }

    abstract class RecursoBiblioteca implements Prestable
    {
        public $id;
        public $titulo;
        public $autor;
        public $anioPublicacion;
        public $estado;
        public $fechaAdquisicion;
        public $tipo;
    
        public function __construct($datos) 
        {
            foreach ($datos as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    class Libro extends RecursoBiblioteca
    {
        public $isbn;
        public function obtenerDetallesPrestamo()

    }

    class Revista extends RecursoBiblioteca
    {
        public $numeroEdicion;
        public function obtenerDetallesPrestamo()

    }

    class DVD extends RecursoBiblioteca
    {
        public $duracion;
        public function obtenerDetallesPrestamo()

    }

?>