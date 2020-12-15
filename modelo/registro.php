<?php

include("conexion.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO registro(username, email, password) VALUES('$username','$email','$password')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Falló");
    }

    $_SESSION['message'] = 'Usuario registrado correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: ../index.php");
}

?>