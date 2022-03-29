<?php include_once("assets//db/db.php"); ?>
<?php include_once("assets/partials/head.php"); ?>

    <title>Técnicos</title>
</head>
<body>
       <?php require_once 'assets/partials/header.php' ?> 
       <img class="img-opcion-menu" src="assets/img/apoyo-tecnico.gif" alt="">
       <h3>Registro de Técnicos</h3>
       
       <form action="add_tecnico.php" method="POST">
            <!---  Nombre --->
            <input type="text" 
                   name="Nombre" 
                   value="" 
                   placeholder="Nombre(es).">
            <!---  Apellido Paterno --->
            <input type="text" 
                   name="ApellidoPaterno" 
                   value="" 
                   placeholder="Apellido Paterno.">
            <!---  Apellido Materno --->
            <input type="text" 
                   name="ApellidoMaterno" 
                   value="" 
                   placeholder="Apellido Materno.">
            <!---  Correo Electrónico --->
            <input type="text" 
                   name="Correo" 
                   value="" 
                   placeholder="Correo Electrónico.">
            <!---  Contraseña de acceso al sistema --->
            <input type="text" 
                   name="Contraseña" 
                   value="" 
                   placeholder="Contraseña para acceso al sistema.">
            <!---  Confirmación de Contraseña para cceso al sistema --->
            <input type="text" 
                   name="ValidaContraseña" 
                   value="" 
                   placeholder="Confirmar su Contraseña.">
            <!---  Celular --->
            <input type="text" 
                   name="Celular" 
                   value="" 
                   placeholder="Numero de Celular.">
              <!---Boton de Registro --->
            <input type="submit" name="GuardarTecnico" value="Registrar">
        </form>


</body>

<?php include_once("assets/partials/footer.php") ?>
</html>



