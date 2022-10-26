<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-danger">
                    <div class="panel panel-heading">Registrar Administrador</div>
                    <div class="panel panel-body">
                        <form method="POST" id="frmRegistro">
                            <label>Nombre</label>
                            <input type="text" class="form-control input-sm" name="nombre" id="nombre">
                            <label>Apellido</label>
                            <input type="text" class="form-control input-sm" name="apellido" id="apellido">
                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                            <label>Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password">
                            <p></p>
                            <span class="btn btn-primary" id="registro">Registrar</span>
                            <a href="index.php" class="btn btn-default">Login</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#registro').click(function() {
            vacios = validarFormVacio('frmRegistro');
            if (vacios > 0) {
                alert("Debes llenar todos los campos!!");
                return false;
            }
            datos = $('#frmRegistro').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/regLogin/registrarUsuario.php",
                success: function(r) {
                    if (r == 1) {
                        alert("Agregado con Exito");
                    } else {
                        alert("Fallo al Agregar");
                    }
                }
            })
        })
    })
</script>