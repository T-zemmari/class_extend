<?php


class Product
{
    protected $id;
    protected $nombre;
    protected $cantidad;
    protected $user_id;
    protected $categoria;
    protected $sub_categoria;
    protected $sub_subcategoria;

    function __construct($nombre, $categoria, $sub_categoria, $sub_subcategoria, $cantidad, $user_id)
    {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->user_id = $user_id;
        $this->categoria = $categoria;
        $this->sub_categoria = $sub_categoria;
        $this->sub_subcategoria = $sub_subcategoria;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
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
    function getSubSubCategoria()
    {
        return $this->sub_categoria;
    }
    function setSubSubCategoria($sub_subcategoria)
    {
        $this->sub_subcategoria = $sub_subcategoria;
    }
   
}
