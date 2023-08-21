<?php


    include 'configuracion.php';

    $correo = $_POST ['correo'];
    $clave = $_POST ['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM tabla_usuarios WHERE correo='$correo' and clave='$clave'");


    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existente");
                window.location = "idex.php";
                </script>
            ';
            exit;
    }

?>