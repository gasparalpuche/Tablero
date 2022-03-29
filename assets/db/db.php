<?php
    //Iniciar Sesión
    session_start();


    // Parametrización de la Base de Datos
    $Servidor        ='localhost';
    $UsuarioBD       = 'root';
    $ContraseñaUsrBD = '';
    $BaseDeDatos     = 'tablero';
    
    $conexion = mysqli_connect($Servidor,$UsuarioBD,$ContraseñaUsrBD,$BaseDeDatos);

    //Validar Conexión
    if (isset($conexion)) {
        echo 'Base de Datos : ['.$BaseDeDatos.'] Conectada con MySQL,<br>';
        echo 'Con el Usuario  : ['.$UsuarioBD.'].<br>';
        echo 'Conexion Exitosa<br>';
    }else{
        echo 'Exite algún erro de conexion entre el Cliente y Servidor de Base de Datos<br>';
    }
   
?> 