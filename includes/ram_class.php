<?php


class Ram extends Movil
{
    protected $id;
    protected $capacidad;

    function __construct($nombre, $categoria, $sub_categoria, $sub_subcategoria ,$cantidad, $user_id, $marca, $modelo, $capacidad, $precio)
    {
        parent::__construct($nombre, $categoria, $sub_categoria, $sub_subcategoria, $cantidad, $user_id,$marca, $modelo, $precio);
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
        $mensaje = "";
        $respuesta = [];
        $id_producto = "";
        $id_ram = "";
        if (empty($datos)) $mensaje = "Faltan datos";
        $sql = "INSERT INTO producto SET nombre='" . mysql_esc($this->nombre) . "',user_id='" . mysql_esc($this->user_id) . "',cantidad='" . mysql_esc($this->cantidad) . "',categoria='" . mysql_esc($this->categoria) . "',sub_categoria='" . mysql_esc($this->sub_categoria) . "',fecha_creacion=NOW()";
        if (mysql_query($sql)) $id_producto = mysql_insert_id();
        if ($id_producto != "") {
            $sql_2 = "INSERT INTO ram SET precio='" . mysql_esc($this->precio) . "',capacidad='" . mysql_esc($this->capacidad) . "' , products_id='" . mysql_esc($id_producto) . "'";
            if (mysql_query($sql_2)) {
                $id_ram = mysql_insert_id();
            }
        }
        $respuesta['ram_mensaje'] = $mensaje;
        $respuesta['products_mensaje'] = $mensaje;
        $respuesta['product_last_id'] = $id_producto;
        $respuesta['ram_last_id'] = $id_ram;
        return $respuesta;
    }


}
