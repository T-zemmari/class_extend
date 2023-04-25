<?php


class Product
{

    protected $nombre;
    protected $cantidad;
    protected $fecha_creacion;
    protected $user_id;
    protected $categoria;
    protected $sub_categoria;

    function __construct($nombre, $categoria,$sub_categoria,$fecha_creacion, $cantidad, $user_id)
    {
        $this->nombre = $nombre;
        $this->fecha_creacion = $fecha_creacion;
        $this->cantidad = $cantidad;
        $this->user_id = $user_id;
        $this->categoria = $categoria;
        $this->sub_categoria = $sub_categoria;
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
    function getFechaCreacion()
    {
        return $this->fecha_creacion;
    }
    function setFechaCreacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }
    function getUserId()
    {
        return $this->user_id;
    }
    function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
    function getCategoria()
    {
        return $this->categoria;
    }
    function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    function getSubCategoria()
    {
        return $this->sub_categoria;
    }
    function setSubCategoria($sub_categoria)
    {
        $this->sub_categoria = $sub_categoria;
    }
}
