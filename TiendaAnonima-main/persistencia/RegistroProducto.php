require_once 'persistencia/ProductoDAO.php';

$productoDAO = new ProductoDAO();

$idProducto = $_POST['idProducto'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precioCompra = $_POST['precioCompra'];
$precioVenta = $_POST['precioVenta'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];
$administrador = $_POST['administrador'];

$producto = new Producto($idProducto, $nombre, $cantidad, $precioCompra, $precioVenta);
$productoDAO->insertar($producto);

header('Location: index.php');
exit;
