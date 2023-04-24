<?php


class Product
{

    protected $nombre;
    protected $cantidad;
    protected $fecha_creacion;
    protected $user_id;
    protected $categoria;
    protected $sub_categria;

    function __construct($nombre, $categoria,$sub_categria,$fecha_creacion, $cantidad, $user_id)
    {
        $this->nombre = $nombre;
        $this->fecha_creacion = $fecha_creacion;
        $this->cantidad = $cantidad;
        $this->user_id = $user_id;
        $this->categoria = $categoria;
        $this->sub_categria = $sub_categria;
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
    function getUCategoria()
    {
        return $this->categoria;
    }
    function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    function getSubCategoria()
    {
        return $this->sub_categria;
    }
    function setSubCatgoria($sub_categria)
    {
        $this->sub_categria = $sub_categria;
    }
}
