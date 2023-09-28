<?php

    include "../scripts/conexion.php";
    session_start();
    error_reporting(0);

    if(isset($_SESSION["username"])){
        header("Location: PagPrincipal/index.php");
    }

    if (isset($_POST["submit"])){
        $email=$_POST["email"];
        $password=md5($_POST["password"]);

        $sql="SELECT * FROM biblioteca WHERE usu_email='$email' AND usu_password='$password'";
        $result= mysqli_query($conn, $sql);

        if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: PagPrincipal/index.php");
        }else{
            echo "<scripts>alert('La contraseña o el email son incorrectos')</scripts>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>E-Bock Inicio Sesion</title>
</head>
<body>
    <main>
        <article>
            <div class="ini">
                <div>
                    <div class="bie">Bienvenido a</div>
                    <div class="nom">E-BOCK</div>
                </div>
            </div>
        </article>
        <article>
            <div class="cuaIni">
                <div>
                    <div>
                        <div class="cuadro" method="POST">
                            <br>
                            <div>
                                INICIAR SESIÓN
                            </div>
                            <br>
                            <div>
                                <input type="text" placeholder="Apodo" title="Ingrese su nombre de usuario o apodo" autofocus="true" autocomplete="on" required name="username">
                            </div>
                            <br>
                            <div>
                                <input type="password" placeholder="Contraseña" title="Ingrese su contraseña" required name="password">
                            </div>
                            <br>
                            <div>
                                <a href="../PagPrincipal/index.php">
                                    <input class="ingresar" type="submit" value="Ingresar">
                                </a>
                            </div>
                            <br>
                            <div>
                                ¿Perdiste tu contraseña?
                            </div>
                            <div>
                                <a href="../registro/index.php">¿No tienes una cuenta? Registrate</a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>
</html>