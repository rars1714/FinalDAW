<?php
    // Muestra el nombre del usuario si está iniciada la sesión
    if (isset($_SESSION["inicio_sesion_exitoso"]) && $_SESSION["inicio_sesion_exitoso"]) {
        $nombreUsuario = isset($_SESSION["nombre_usuario"]) ? $_SESSION["nombre_usuario"] : "usuario";
        if (isset($_GET['cerrar_sesion'])) {
            session_unset();
            
            session_destroy();
            
            header("Location: index.php");
            exit();
        }
        echo '<span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">' . $nombreUsuario . '</span>';
        echo '<a class="nav-icon position-relative text-decoration-none" href="cerrar.php"> <!-- Modificado el href -->
                <i class="fa fa-fw fa-sign-out text-dark mr-3"></i>Salir
            </a>';
    }
?>