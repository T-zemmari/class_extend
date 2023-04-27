<?php


class Ram extends Movil
{
    protected $id;
    protected $capacidad;
    protected $producto_id;
    function __construct($nombre, $categoria, $sub_categoria, $sub_subcategoria, $cantidad, $user_id, $marca, $modelo, $capacidad, $precio)
    {
        parent::__construct($nombre, $categoria, $sub_categoria, $sub_subcategoria, $cantidad, $user_id, $marca, $modelo, $precio);
        $this->capacidad = $capacidad;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }

    function guardar_producto()
    {
        $mensaje_ram = "";
        $mensaje_producto = "";
        $respuesta = [];
        $id_producto = "";
        $id_ram = "";
        $sql = "INSERT INTO producto SET nombre='" . mysql_esc($this->nombre) . "',user_id='" . mysql_esc($this->user_id) . "',cantidad='" . mysql_esc($this->cantidad) . "',categoria='" . mysql_esc($this->categoria) . "',sub_categoria='" . mysql_esc($this->sub_categoria) . "',fecha_creacion=NOW()";
        if (mysql_query($sql)) {
        }
        $id_producto = mysql_insert_id();
        if ($id_producto != "") {
            $mensaje_producto = "Producto guardado correctamente";
            $sql_2 = "INSERT INTO ram SET precio='" . mysql_esc($this->precio) . "',capacidad='" . mysql_esc($this->capacidad) . "' , producto_id='" . mysql_esc($id_producto) . "'";
            if (mysql_query($sql_2)) {
                $id_ram = mysql_insert_id();
                $mensaje_ram = "Ram guardada correctamente";
            }
        }
        $respuesta['ram_mensaje'] = $mensaje_ram;
        $respuesta['products_mensaje'] = $mensaje_producto;
        $respuesta['product_last_id'] = $id_producto;
        $respuesta['ram_last_id'] = $id_ram;
        $respuesta['sql'] = $sql;
        $respuesta['sql_2'] = $sql_2;
        return $respuesta;
    }
}
