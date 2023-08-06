// backend/productos.php

// Endpoint para obtener todos los productos clasificados por categorías (postres, desayunos, comidas)
// Aquí realizas una consulta SQL para obtener los productos de la base de datos y los devuelves como un array en formato JSON:
$productos = consulta_mysql("SELECT * FROM productos");
echo json_encode($productos);

// Endpoint para agregar un nuevo producto a la base de datos
// Aquí recibes los datos del nuevo producto desde el frontend y los guardas en la base de datos:
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
consulta_mysql("INSERT INTO productos (nombre, categoria, precio) VALUES ('$nombre', '$categoria', '$precio')");

// Luego, devuelves una respuesta de éxito o error según el resultado del agregado
echo json_encode(array('status' => 'success', 'message' => 'Producto agregado correctamente'));