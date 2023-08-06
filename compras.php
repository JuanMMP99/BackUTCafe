// backend/compras.php

// Endpoint para guardar las compras del usuario en la base de datos
// Aquí recibes los datos de la compra desde el frontend (producto comprado, método de pago, etc.)
// y realizas las operaciones necesarias para guardar la compra en la base de datos:
$productoId = $_POST['producto_id'];
$metodoPago = $_POST['metodo_pago'];
$usuarioId = 1; // Aquí debes obtener el ID del usuario autenticado (puedes usar el token de autenticación para esto)

consulta_mysql("INSERT INTO compras (usuario_id, producto_id, metodo_pago) VALUES ('$usuarioId', '$productoId', '$metodoPago')");

// Luego, devuelves una respuesta de éxito o error según el resultado del guardado
echo json_encode(array('status' => 'success', 'message' => 'Compra realizada y guardada correctamente'));