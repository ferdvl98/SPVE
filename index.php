<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Registro</title>
    <link rel = "stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para ingresar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>

                <div class="caja__trasera_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para Iniciar Sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div> 
            <!-- Formulario de registro y Login-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Nombre de Usuario" name="">
                    <input type="password" placeholder="Contraseña" name="" >
                    <button name="" id="login">Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="number" name="tel"  placeholder="Número de Teléfono">
                    <input type="text" name="user"  placeholder="Nombre de Usuario">
                    <input type="password" name="pass"  placeholder="Contraseña">
                    <input type="password" name="pass2"  placeholder="Confirmar Contraseña">
                    <button name="" id="singup">Registrarse</button>
                </form>
            </div>   
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>