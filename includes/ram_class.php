<?php


class Ram extends Movil
{

    protected $capacidad;

    function __construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id, $marca, $modelo, $capacidad, $precio)
    {
        parent::__construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id,$marca,$modelo,$precio);
        $this->capacidad = $capacidad;
        $this->precio = $precio;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }
}
