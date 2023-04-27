<?php


class Movil extends Product
{

    protected $precio;
    protected $marca;
    protected $modelo;

    function __construct($nombre="", $categoria="", $sub_categoria="", $sub_subcategoria="",  $cantidad="", $user_id="", $marca="", $modelo="", $precio="")
    {
        parent::__construct($nombre, $categoria, $sub_categoria, $sub_subcategoria, $cantidad, $user_id);
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }
    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    
}
