// Obtenemos los elementos de formulario

const form = document.querySelector('form');
const nombre_del_producto = document.getElementById('nombre_del_producto');
const marca = document.getElementById('marca');
const modelo = document.getElementById('modelo');
const select_categoria = document.getElementById('select_categoria');
const select_subcategoria = document.getElementById('select_subcategoria');
const select_subsubcategoria = document.getElementById('select_subsubcategoria');
const select_capacidad = document.getElementById('select_capacidad');
const precio = document.getElementById('precio');
const cantidad = document.getElementById('cantidad');

// Agregamos un evento input a cada campo
nombre_del_producto.addEventListener('input', validar_nombre_de_producto);

function validar_nombre_de_producto() {
    const nombre = nombre_del_producto.value.trim();
    const nombre_RegExp = /^[A-Za-z0-9\s\-_\.,()&'"\[\]]{1,100}$/;
    let seguir = false;
    if (nombre === '' || !nombre_RegExp.test(nombre)) {
        $(`#nombre_del_producto`).addClass('custom-correcto');
        $(`#nombre_del_producto`).removeClass('custom-incorrecto');
        seguir = false;
    } else {
        $(`#nombre_del_producto`).addClass('custom-incorrecto');
        $(`#nombre_del_producto`).removeClass('custom-correcto');
        seguir = true;
    }
    return seguir;
}



function todo_ok() {
    let todo_ok = false;
    if (validar_nombre_de_producto()) todo_ok = true;
    console.log('todo_ok', todo_ok);
    return todo_ok;
}


form.addEventListener('submit', (event) => {
    if (!todo_ok()) {
        event.preventDefault();
    }
});