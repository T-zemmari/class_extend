<?php


class Product
{

    protected $nombre;
    protected $cantidad;
    protected $fecha_creacion;
    protected $user_id;

    function __construct($nombre, $fecha_creacion, $cantidad, $user_id)
    {

        $this->nombre = $nombre;
        $this->fecha_creacion = $fecha_creacion;
        $this->cantidad = $cantidad;
        $this->user_id = $user_id;
    }
    function getNombre()
    {
        return $this->nombre;
    }
    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function getCantidad()
    {
        return $this->cantidad;
    }
    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
    function getFechaCrecion()
    {
        return $this->fecha_creacion;
    }
    function serFechaCreacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }
    function getUserId()
    {
        return $this->user_id;
    }
    function serUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
