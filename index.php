<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <title>Login de Usuario</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Sistema de Ventas y Almacen</div>
                    <div class="panel panel-body">
                        <p>
                            <img src="img/ventas.jpg" height="190px">
                        </p>
                        <form id="frmLogin">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                            <label for="password">Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password">
                            <br><span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
                            <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
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
        $('#entrarSistema').click(function() {
            vacios = validarFormVacio('frmLogin');
            if (vacios > 0) {
                alert("Debes llenar todos los campos!!");
                return false;
            }
            datos = $('#frmLogin').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/regLogin/login.php",
                success: function(r) {
                    if (r == 1) {
                        window.location = "vistas/inicio.php";
                    } else {
                        alert("No se pudo acceder :(");
                    }
                }
            })
        })
    })
</script>