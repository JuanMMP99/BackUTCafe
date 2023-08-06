// backend/login.php

$username = $_POST['username'];
$password = $_POST['password'];

// Aquí realizas la validación de usuario en la base de datos y verificas las credenciales
// Por ejemplo, puedes usar una función que verifique las credenciales con una consulta SQL:
$result = consulta_mysql("SELECT * FROM usuarios WHERE nombre_usuario = '$username' AND contraseña = '$password'");

// Si las credenciales son válidas, devuelves una respuesta de éxito y token de autenticación
if ($result && mysqli_num_rows($result) > 0) {
    $token = generate_token($username); // Función para generar un token único
    echo json_encode(array('status' => 'success', 'token' => $token));
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Credenciales inválidas'));
}