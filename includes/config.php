<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = 'prueba_db_pr';
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$link->set_charset("utf8");
if (mysqli_connect_error()) {
    echo "Connection Error.";
} else {
    $estado_conection = "Conectado";
}

// funcion mysql_query

function mysql_query($query)
{
    global $link;
    $respuesta = mysqli_query($link, $query);
    return $respuesta;
}

function mysql_insert_id()
{
    global $link;
    return mysqli_insert_id($link);
}

function mysql_fetch_assoc($result)
{
    global $link;
    if ($result === false) {
        return mysqli_error($link);
    }
    return mysqli_fetch_assoc($result);
}
function mysql_fetch_array($datos)
{
    global $link;
    if ($datos === false) {
        return mysqli_error($link);
    }
    return mysqli_fetch_array($datos);
}
function mysql_real_escape_string($datos)
{
    global $link;
    return mysqli_real_escape_string($link, $datos);
}

function mysql_esc($datos)
{
    return mysql_real_escape_string($datos);
}

function mysql_num_rows($result)
{
    if ($result === false) {
        return false;
    } else {
        return mysqli_num_rows($result);
    }
}