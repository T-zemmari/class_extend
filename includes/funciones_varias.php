<?php
include('includes/config.php');
include('includes/product_class.php');
include('includes/movil_class.php');
include('includes/ram_class.php');


// Funcion guardar nuevo producto

function guardar_producto($datos)
{
    $mensaje = "";
    $id_producto = "";
    $respuesta = [];
    if (empty($datos)) $mensaje = "Faltan datos";
    $sql = "INSERT INTO producto SET nombre='" . mysql_esc($datos['nombre']) . "',user_id='" . mysql_esc($datos['user_id']) . "',cantidad='" . mysql_esc($datos['cantidad']) . "',categoria='" . mysql_esc($datos['categoria']) . "',sub_categoria='" . mysql_esc($datos['sub_categoria']) . "',fecha_creacion=NOW()";
    if (mysql_query($sql)) $id_producto = mysql_insert_id();
    $respuesta['mensaje'] = $mensaje;
    $respuesta['last_id'] = $id_producto;
    return $respuesta;
}
