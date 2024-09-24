<?php
class ProductoDAO{
    private $idProducto;
    private $nombre;
    private $cantidad;
    private $precioCompra;
    private $precioVenta;
    
    public function __construct($idProducto=0, $nombre="", $cantidad=0, $precioCompra=0, $precioVenta=0){
        $this -> idProducto = $idProducto;
        $this -> nombre = $nombre;
        $this -> cantidad = $cantidad;
        $this -> precioCompra = $precioCompra;
        $this -> precioVenta = $precioVenta;
    }
    
    public function consultarTodos(){
        //$query = "select idProducto, nombre, cantidad, precioCompra, precioVenta from Producto";
        $query = "select p.idProducto, p.nombre, p.cantidad, p.precioCompra, p.precioVenta, m.nombre as marca, c.nombre as categoria 
        FROM producto p 
        LEFT JOIN marca m ON m.idMarca = p.Marca_idMarca 
        LEFT JOIN categoria c ON c.idCategoria=p.Categoria_idCategoria;";
        return $query;
    }
    
    
}

?>