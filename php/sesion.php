
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST["correo"];
        $pass = $_POST["pass"];

        $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND pass='$pass'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();
            $_SESSION["inicio_sesion_exitoso"] = true;
            $_SESSION["nombre_usuario"] = $usuario["nombre"];
            header("Location: index.php");
            exit();
        } else {
            $_SESSION["inicio_sesion_exitoso"] = false;
            header("Location: inicio_sesion.php");
            exit();
        }
    }
?>