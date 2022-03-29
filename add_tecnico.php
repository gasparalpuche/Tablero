<?php include_once("assets/partials/header.php") ?>
<?php include_once("assets/db/db.php") ?>

<?php
 
 if (isset($_POST['GuardarTecnico'])) {
     echo "Guardando Formulario...!!!! <br>";
     //Asignar vartiables de HTMLS x POST a PHP
     $Nombre                = $_POST['Nombre'];
     $ApellidoPaterno       = $_POST['ApellidoPaterno'];
     $ApellidoMaterno       = $_POST['ApellidoMaterno'];
     $Correo                = $_POST['Correo'];
     $Contraseña            = $_POST['Contraseña'];
     $ValidaContraseña      = $_POST['ValidaContraseña'];
     $Celular               = $_POST['Celular'];
     
    //Imprimir datos recabados de HTML de prueba.
    echo $Nombre." <br>";
    echo $ApellidoPaterno." <br>";
    echo $ApellidoMaterno." <br>";
    echo $Correo." <br>";
    echo $Contraseña." <br>";
    echo $ValidaContraseña." <br>";
    echo $Celular." <br>";
    
    //Crear Consulta
    //$sql = "INSERT INTO Tareas (IdTarea,Titulo, Descripcion) VALUES (null,'$titulo','$descripcion')";
    $sql = "INSERT INTO cat_tecnicos(Nombre,ApellidoPaterno,ApellidoMaterno,Correo,Contraseña,Celular,IdNivel) 
            VALUES ('$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Correo','$Contraseña','$Celular',1)";
    
    //Ejecutar y enviar Consulta
    $estatus = mysqli_query($conexion, $sql);
    
    if (!$estatus) {
        echo "Inserción Fallida...!!! . <br>";
        $_SESSION['mensaje'] = 'Inserción Fallida...!!!';
        $_SESSION['tipo_mensaje'] = 'danger';
        //die("Inserción Fallida...!!! . <br>");
        header("Location: f_tecnicos.php");
    }else{
        echo "Los datos se almacenaron correctamente en la base de datos <br>";
        $_SESSION['mensaje'] = 'Los datos se almacenaron correctamente en la base de datos';
        $_SESSION['tipo_mensaje'] = 'success';
        header("Location: f_tecnicos.php");
    }
    
 }

?>


<form action="f_tecnicos.php" method="POST">                       
    <input type="submit" name="GuardarTecnico" value="Regresar">
</form>

<?php include_once("assets/partials/footer.php") ?>