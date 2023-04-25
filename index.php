<?php
include('includes/funciones_varias.php');

if (isset($_POST['guardar_producto'])) {
    $nombre_ram=$_POST['nombre_ram'];
    $productoMovil = new Ram($nombre, $categoria, $sub_categoria, $fecha_creacion, $cantidad, $user_id, $marca, $modelo, $capacidad, $precio);

    // Obtener los valores de las propiedades del objeto Ram
    $nombre = $productoMovil->getNombre();
    $fechaCreacion = $productoMovil->getFechaCreacion();
    $cantidad = $productoMovil->getCantidad();
    $userId = $productoMovil->getUserId();
    $marca = $productoMovil->getMarca();
    $modelo = $productoMovil->getModelo();
    $capacidadRam = $productoMovil->getCapacidad();
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
                <form>
                    <div class="form-group">
                        <label for="nombre_del_producto">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre_del_producto" placeholder="Escribe el nombre del producto">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="select_categoria">Categoria</label>
                                <select class="form-control" id="select_categoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">Electrónica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="select_sub_categoria">Sub-categoria</label>
                                <select class="form-control" id="select_categoria">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">Moviles</option>
                                    <option value="2">Ordenadores</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success mt-5">Guardar nuevo producto</button>
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