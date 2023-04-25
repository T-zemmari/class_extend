<?php


class Product
{
    protected $id;
    protected $nombre;
    protected $cantidad;
    protected $fecha_creacion;
    protected $user_id;
    protected $categoria;
    protected $sub_categoria;

    function __construct($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id)
    {
        $this->nombre = $nombre;
        $this->fecha_creacion = $fecha_creacion;
        $this->cantidad = $cantidad;
        $this->user_id = $user_id;
        $this->categoria = $categoria;
        $this->sub_categoria = $sub_categoria;
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
    function guardar_producto()
    {
        $mensaje = "";
        $respuesta = [];
        if (empty($datos)) $mensaje = "Faltan datos";
        $sql = "INSERT INTO producto SET nombre='" . mysql_esc($this->nombre) . "',user_id='" . mysql_esc($this->user_id) . "',cantidad='" . mysql_esc($this->cantidad) . "',categoria='" . mysql_esc($this->categoria) . "',sub_categoria='" . mysql_esc($this->sub_categoria) . "',fecha_creacion=NOW()";
        if (mysql_query($sql)) $id_producto = mysql_insert_id();
        $respuesta['mensaje'] = $mensaje;
        $respuesta['last_id'] = $id_producto;
        return $respuesta;
    }
    function actualizar_producto()
    {
        $mensaje = "";
        $respuesta = [];
        if (empty($datos)) $mensaje = "Faltan datos";
        $sql = "UPDATE producto SET nombre='" . mysql_esc($this->nombre) . "',user_id='" . mysql_esc($this->user_id) . "',cantidad='" . mysql_esc($this->cantidad) . "',categoria='" . mysql_esc($this->categoria) . "',sub_categoria='" . mysql_esc($this->sub_categoria) . "' WHERE id='" . mysql_esc($this->id) . "' ";
        if (mysql_query($sql)) {
            $respuesta['mensaje'] = $mensaje;
            $respuesta['products_id'] = $this->id;
        }
        return $respuesta;
    }
}
