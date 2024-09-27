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

        public function agregarRecurso(RecursoBiblioteca $recurso)
        {

        }

        public function eliminarRecurso($id)
        {

        }

        public function actualizarRecurso(RecursoBiblioteca $recurso)
        {

        }

        public function actualizarEstadoRecurso($id, $nuevoEstado)
        {

        }
        

        public function buscarRecursosPorEstado($estado)
        {

        }

        public function listarRecursos($filtroEstado = '', $campoOrden = 'id', $direccionOrden = 'ASC')
        {

        }
    }

    class Libro extends RecursoBiblioteca
    {
        public $isbn;
        public function obtenerDetallesPrestamo()
        {
            return $isbn;
        }

    }

    class Revista extends RecursoBiblioteca
    {
        public $numeroEdicion;
        public function obtenerDetallesPrestamo()
        {
            return $numeroEdicion;
        }
    }

    class DVD extends RecursoBiblioteca
    {
        public $duracion;
        public function obtenerDetallesPrestamo()
        {
            return  $duracion;
        }
    }
    
?>