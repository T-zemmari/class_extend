<?php


class Movil extends Product
{

    protected $precio;

    function __construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id, $precio)
    {
        parent::__construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id);
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
}
