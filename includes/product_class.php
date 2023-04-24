<?php


class Product
{

    protected $nombre;
    protected $cantidad;
    protected $fecha_creacion;
    protected $user_id;

    function __construct($nombre, $fecha_creacio, $cantidad, $user_id)
    {

        $this->nombre = $nombre;
        $this->fecha_creacion = $fecha_creacio;
        $this->cantidad = $cantidad;
        $this->user_id = $user_id;
    }

}
