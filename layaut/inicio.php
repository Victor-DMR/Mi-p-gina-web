<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title></title>
</head>

<body onload="tamañoActual();" onresize="tamañoActual();">
    <main>
        <!--Contenido de la navegacion dentro del header-->
        <header>
            <!--boton para desplegar el menú dentro de la etiqueta i-->
            <i id="menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" class='bx bx-menu'></i>
            <!--menú donde se encuentra la naveación-->
            <div class="offcanvas offcanvas-start restaurarmenu" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <section id="contenborder">
                    <div class="offcanvas-header" data-bs-theme="dark">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <section class="fotoperfil">
                            <img id="perfil" src="img/fotoperfil.jpg" alt="foto">
                        </section>
                        <br>
                        <h4 id="saludo">Hello, my name is Victor Montoya I am a systems engineer, a pleasure to meet you</h4>
                        <br>
                        <nav>
                            <ul>
                                <li><a class="link" href="index.php">Home</a></li>
                                <li><a class="link" href="aboutme.php">About me</a></li>
                                <li><a class="link" href="abilities.php">Abilities</a></li>
                                <li><a class="link" href="contactme.php">Contact me</a></li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

    <script src="js/app.js"></script>
    <script src="js/particles.min.js"></script>
</body>

</html>