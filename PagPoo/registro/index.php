<?php

    include "../scripts/conexion.php";
    error_reporting(0);
    session_start();

    if(isset($_SESSION["usu_name"])){
        header("Location: PagPrincipal/index.php");
    }

    if(isset($_POST["submit"])){
        $username = $_POST ["username"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $cpassword = md5($_POST["cpassword"]);

        if($password == $cpassword){
            $sql = "SELECT * FROM users WHERE usu_email = '$email'";
            $result = mysqli_query($conn, $sql);
            if(!$result->num_rows > 0){
                $sql="INSERT INTO users (usu_name, usu_email, usu_password)
                VALUE ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "<script>alert('Usuario registrado con exito')</script>";
                    $username="";
                    $email="";
                    $_POST["password"]="";
                    $_POST["cpassword"]="";
                }else{
                    echo "<script>alert('Hay un error')</script>";
                }
            }else{
                echo "<script>alert('El correo ya existe')</script>";
            }
        }else{
            echo "<script>alert('Las contraseñas no coinciden')</script>";
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
    <title>E-Bock Registro</title>
</head>
<body>
    <main>
        <article>
            <div class="ini">
                <div class="cuadro">
                    <br>
                    <div>
                        REGISTRO
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="Nombre Completo" title="Ingresa tu nombre completo" autofocus="true" autocomplete="on" required name="username">
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="Apodo o nombre de usuario" title="Ingresa tu nombre de usuario" autofocus="true" autocomplete="on" required>
                    </div>
                    <br>
                    <div>
                        <input type="text" placeholder="Correo electrónico" title="Ingrese su correo electrónico" autofocus="true" autocomplete="on" required name="email">
                    </div>
                    <br>
                    <div>
                        <input type="password" placeholder="Contraseña" title="Ingrese su contraseña" required name="password">
                    </div>
                    <br>
                    <div>
                        <input type="password" placeholder="Repetir Contraseña" title="Ingrese su contraseña" required name="password">
                    </div>
                    <br>
                    Fecha de nacimiento:
                    <br>
                    <input type="date" id="start" value="0000-00-00" min="2018-01-01">
                    <br>
                    <br>
                    <div>
                        <input href="../inicioSesion/index.php" type="submit" value="Registrate" href="../inicioSesion/index.php">
                    </div>
                    <br>
                </div>
            </div>
        </article>
        <article>
            <div class="cuaIni">
                E-BOCK
            </div>
        </article>
    </main>
</body>
</html>