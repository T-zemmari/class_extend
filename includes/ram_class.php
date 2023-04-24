<?php


class Ram extends Product
{

    protected $capacidad;
    protected $precio;

    function __construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id, $marca, $modelo, $capacidad, $precio)
    {
        parent::__construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id, $marca, $modelo);
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
    public function getapacidad()
    {
        return $this->capacidad;
    }

    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }
}
