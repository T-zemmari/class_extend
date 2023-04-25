<?php
include('includes/funciones_varias.php');

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
    $nuevo_producto = new Ram($nombre, $categoria, $sub_categoria, $sub_subcategoria, $cantidad, $user_id, $marca, $modelo, $capacidad, $precio);
    $info_guardar_producto = $nuevo_producto->guardar_producto();
    echo '<pre>';
    print_r($info_guardar_producto);
    echo '</pre>';
}

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
</style>

<body>

    <div class="container-fluid" style="padding:0px">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" style="margin-left:10px">Class extended</a>
        </nav>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Nuevo producto</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nombre_del_producto">Nombre del producto</label>
                                <input type="text" class="form-control" id="nombre_del_producto" name="nombre_del_producto" placeholder="Escribe el nombre del producto">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="nombre_del_producto">Marca</label>
                                <input type="text" class="form-control" id="nombre_del_producto" name="marca" placeholder="Marca">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="modelo">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="select_categoria">Categoria</label>
                                <select class="form-control" id="select_categoria" name="select_categoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">Electrónica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="select_subcategoria">Sub-categoria</label>
                                <select class="form-control" id="select_subcategoria" name="select_subcategoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">Moviles</option>
                                    <option value="2">Ordenadores</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="select_subsubcategoria">Sub-subcategoria</label>
                                <select class="form-control" id="select_subsubcategoria" name="select_subsubcategoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="HDD">HDD</option>
                                    <option value="RAM">RAM</option>
                                    <option value="GRAFICA">GRAFICA</option>
                                    <option value="FUENTE DE ALIMENTACION">FUENTE DE ALIMENTACIÓN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="select_capacidad">Capacidad</label>
                                <select class="form-control" id="select_capacidad" name="select_capacidad">
                                    <option value="0">Seleccionar</option>
                                    <option value="4GB">4GB</option>
                                    <option value="8GB">8GB</option>
                                    <option value="16GB">16GB</option>
                                    <option value="32GB">32GB</option>
                                    <option value="64GB">64GB</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
                        </div>
                        <div class="col-3">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Precio">
                        </div>
                    </div>
                    <button class="btn btn-success mt-5" name="btn_guardar_producto">Guardar nuevo producto</button>
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
                            <th scope="col">Fecha creación</th>
                            <th scope="col">Ram</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="assets/bootstrap_v5.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>