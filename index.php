<?php
include('includes/funciones_varias.php');


$mensaje_faltan_datos = "";

if (isset($_POST['btn_guardar_producto'])) {
    $nombre = $_POST['nombre_del_producto'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $categoria = $_POST['select_categoria'];
    $sub_categoria = $_POST['select_subcategoria'];
    $sub_subcategoria = $_POST['select_subsubcategoria'];
    $capacidad = $_POST['select_capacidad'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $user_id = "1";

    if (empty($nombre) || empty($marca) || empty($modelo) || empty($categoria) || empty($sub_categoria) || empty($sub_subcategoria) || empty($capacidad) || empty($precio) || empty($cantidad)) {
        $mensaje_faltan_datos = "Rellena todos los campos";
    } else {
        $nuevo_producto = new Ram($nombre, $categoria, $sub_categoria, $sub_categoria, $cantidad, $user_id, $marca, $modelo, $capacidad, $precio);
        $info_guardar_producto = $nuevo_producto->guardar_producto();
    }
}

$info_productos = new Ram();
$productos = $info_productos->listar_productos();
$contador = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="assets/bootstrap_v5.3/css/bootstrap.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .custom-correcto {
        border: 1px solid red !important;
    }

    .custom-incorrecto {
        border: 1px solid green !important;
    }
</style>

<body>

    <div class="container-fluid" style="padding:0px">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" style="margin-left:10px">Class extended</a>
        </nav>
    </div>

    <div class="row mt-5 p-1">
        <div class="col-12">
            <div class="alert alert-danger" style="display:<?= $mensaje_faltan_datos != "" ? '' : 'none' ?>"><?= $mensaje_faltan_datos ?></div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Nuevo producto</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <form action="" method="post" id="form">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group" id="contenedor_nombre_producto">
                                <label for="nombre_del_producto" style="font-weight:600">Nombre del producto</label>
                                <input type="text" class="form-control mt-1" id="nombre_del_producto" name="nombre_del_producto" placeholder="Escribe el nombre del producto">
                                <small style="color:red;display:none" style="display:none" id="nombre_info_validacion">Formato incorrecto</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="marca" style="font-weight:600">Marca</label>
                                <input type="text" class="form-control mt-1" id="marca" name="marca" placeholder="Marca">
                                <small style="color:red;display:none" style="display:none" id="marca_info_validacion">Formato incorrecto</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="modelo" style="font-weight:600">Modelo</label>
                                <input type="text" class="form-control mt-1" id="modelo" name="modelo" placeholder="Modelo">
                                <small style="color:red;display:none" style="display:none" id="modelo_info_validacion">Formato incorrecto</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-3 mt-1">
                            <div class="form-group">
                                <label for="select_categoria" style="font-weight:600">Categoria</label>
                                <select class="form-control mt-1" id="select_categoria" name="select_categoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="Electrónica">Electrónica</option>
                                </select>
                                <small style="color:red;display:none" style="display:none" id="categoria_info_validacion">Debes seleccionar una categoria</small>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="form-group">
                                <label for="select_subcategoria" style="font-weight:600">Sub-categoria</label>
                                <select class="form-control mt-1" id="select_subcategoria" name="select_subcategoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="Moviles">Moviles</option>
                                    <option value="Ordenadores">Ordenadores</option>
                                </select>
                                <small style="color:red;display:none" style="display:none" id="subcategoria_info_validacion">Debes seleccionar una subcategoria</small>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="form-group">
                                <label for="select_subsubcategoria" style="font-weight:600">Sub-subcategoria</label>
                                <select class="form-control mt-1" id="select_subsubcategoria" name="select_subsubcategoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="HDD">HDD</option>
                                    <option value="RAM">RAM</option>
                                    <option value="GRAFICA">GRAFICA</option>
                                    <option value="FUENTE DE ALIMENTACION">FUENTE DE ALIMENTACIÓN</option>
                                </select>
                                <small style="color:red;display:none" id="sub_subcategoria_info_validacion">Debes seleccionar una sub-subcategoria</small>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <div class="form-group">
                                <label for="select_capacidad" style="font-weight:600">Capacidad</label>
                                <select class="form-control mt-1" id="select_capacidad" name="select_capacidad">
                                    <option value="0">Seleccionar</option>
                                    <option value="4GB">4GB</option>
                                    <option value="8GB">8GB</option>
                                    <option value="16GB">16GB</option>
                                    <option value="32GB">32GB</option>
                                    <option value="64GB">64GB</option>
                                </select>
                                <small style="color:red;display:none" style="display:none" id="capacidad_info_validacion">Debes seleccionar una capacidad</small>
                            </div>
                        </div>
                        <div class="col-3 mt-2">
                            <label for="precio" style="font-weight:600">Precio</label>
                            <input type="decimal" class="form-control mt-1" id="precio" name="precio" placeholder="Precio">
                            <small sstyle="color:red;display:none" style="display:none" id="precio_info_validacion">Solo se admiten numeros</small>
                        </div>
                        <div class="col-3 mt-2">
                            <label for="cantidad" style="font-weight:600">Cantidad</label>
                            <input type="number" class="form-control mt-1" id="cantidad" name="cantidad" placeholder="Cantidad">
                            <small style="color:red;display:none" style="display:none" id="capacidad_info_validacion">Solo se admiten numeros</small>
                        </div>
                    </div>
                    <button class="btn btn-success mt-4" name="btn_guardar_producto">Guardar nuevo producto</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Sub categoria</th>
                            <th scope="col">Sub subcategoria</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha creación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto) : ?>
                            <tr>
                                <th scope="row"><?= $contador++ ?></th>
                                <td><?= $producto['nombre'] ?></td>
                                <td><?= $producto['categoria'] ?></td>
                                <td><?= $producto['sub_categoria'] ?></td>
                                <td><?= $producto['precio'] ?></td>
                                <td><?= $producto['sub_subcategoria'] ?></td>
                                <td><?= $producto['cantidad'] ?></td>
                                <td><?= explode(' ', $producto['fecha_creacion'])[0] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/utils/jquery-3-6-4.min.js"></script>
    <script src="assets/bootstrap_v5.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/utils/validador_nuevo_producto.js"></script>
</body>

</html>