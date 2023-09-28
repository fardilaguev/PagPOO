<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>E-Bock Pagina Principal</title>
</head>
<body>
    <header class="fNav">
        <div>
            <nav class="navbar">
                <div class="container-fluid">
                  <a href="../PagPrincipal/index.html" class="navbar-brand">E-BOCK</a>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <aside class="iz" style="position: fixed;">
            <div>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Generos
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="">Ciencia Ficcion</a><br>
                            <a href="">Accion</a><br>
                            <a href="">Biografias</a><br>
                            <a href="">Comedia</a><br>
                            <a href="">Crimen</a><br>
                            <a href="">Drama</a><br>
                            <a href="">Terror</a><br>
                            <a href="">Suspenso</a><br>
                            <a href="">Romance</a><br>
                            <a href="">Fantasia</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Cuenta
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="../PerfilLector/index.html">Mi Perfil</a><br>
                            <a href="">Libros Guardados</a><br>
                            <a href="">Estado de la cuenta</a><br>
                            <a href="../inicioSesion/logout.php">Cerrar Sesion</a>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Ajustes
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <a href="">Contactanos</a><br>
                            <a href="">Privacidad</a><br>
                            <a href="">Buzon de Ayuda</a><br>
                            <a href="">Tu Actividad</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </aside>
        <article class="de">
            <div>
                <div class="izq">
                    <a href="../PerfilAutor/index.html"><img class="img" src="../img/foto perfil.jpg" alt=""></a>
                </div>
                <div class="der">
                    Andres Abril <br>
                    Autor <br>
                    Romance - Ciencia Ficcion
                </div>
            </div>
            <div>
                <div class="desc">
                    <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
                </div>
                <br>
                <div>
                  <div class="pubImg">
                    <img src="../img/Como analizar a las personas.jpg" class="rounded mx-auto d-block" alt="">
                  </div>
                </div>
            </div>
            <br>
            <br>
            <div>
            <div>
              <a href="../PedirLibro/index.html">
                <button type="button" class="btn btn-light">Pedir Libro</button>
              </a>
            </div>
            <br>
            <br>

            <div>
              <div class="izq">
                  <img class="img" src="../img/foto perfil.jpg" alt="">
              </div>
              <div class="der">
                  Andres Abril <br>
                  Autor <br>
                  Romance - Ciencia Ficcion
              </div>
            </div>
            <div>
              <div class="desc">
                  <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
              </div>
              <br>
              <div>
                <div class="pubImg">
                  <img src="../img/Don quijote de la mancha.jpg" class="rounded mx-auto d-block" alt="">
                </div>
              </div>
            </div>
            <br>
            <br>
            <div>
            <div>
            <button type="button" class="btn btn-light">Pedir Libro</button>
            </div>
            <br>
            <br>

            <div>
            <div class="izq">
                <img class="img" src="../img/foto perfil.jpg" alt="">
            </div>
            <div class="der">
                Andres Abril <br>
                Autor <br>
                Romance - Ciencia Ficcion
            </div>
            </div>
            <div>
            <div class="desc">
                <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
            </div>
            <br>
            <div>
              <div class="pubImg">
                <img src="../img/El angel de la ciudad.jpg" class="rounded mx-auto d-block" alt="">
              </div>
            </div>
            </div>
            <br>
            <br>
            <div>
            <div>
              <button type="button" class="btn btn-light">Pedir Libro</button>
            </div>
            <br>
            <br>

            <div>
            <div class="izq">
              <img class="img" src="../img/foto perfil.jpg" alt="">
            </div>
            <div class="der">
              Andres Abril <br>
              Autor <br>
              Romance - Ciencia Ficcion
            </div>
            </div>
            <div>
            <div class="desc">
              <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
            </div>
            <br>
            <div>
            <div class="pubImg">
              <img src="../img/El arte de la seduccion.jpg" class="rounded mx-auto d-block" alt="">
            </div>
            </div>
            </div>
            <br>
            <br>
            <div>
            <div>
              <button type="button" class="btn btn-light">Pedir Libro</button>
            </div>
            <br>
            <br>

      <div>
        <div class="izq">
            <img class="img" src="../img/foto perfil.jpg" alt="">
        </div>
        <div class="der">
            Andres Abril <br>
            Autor <br>
            Romance - Ciencia Ficcion
        </div>
    </div>
    <div>
        <div class="desc">
            <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
        </div>
        <br>
        <div>
          <div class="pubImg">
            <img src="../img/El beso que no te di.jpg" class="rounded mx-auto d-block" alt="">
          </div>
        </div>
    </div>
    <br>
    <br>
    <div>
    <div>
      <button type="button" class="btn btn-light">Pedir Libro</button>
    </div>
    <br>
    <br>

    <div>
      <div class="izq">
          <img class="img" src="../img/foto perfil.jpg" alt="">
      </div>
      <div class="der">
          Andres Abril <br>
          Autor <br>
          Romance - Ciencia Ficcion
      </div>
  </div>
  <div>
      <div class="desc">
          <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
      </div>
      <br>
      <div>
        <div class="pubImg">
          <img src="../img/El diario de ana frank.jpg" class="rounded mx-auto d-block" alt="">
        </div>
      </div>
  </div>
  <br>
  <br>
  <div>
  <div>
    <button type="button" class="btn btn-light">Pedir Libro</button>
  </div>
  <br>
  <br>

  <div>
    <div class="izq">
        <img class="img" src="../img/foto perfil.jpg" alt="">
    </div>
    <div class="der">
        Andres Abril <br>
        Autor <br>
        Romance - Ciencia Ficcion
    </div>
</div>
<div>
    <div class="desc">
        <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
    </div>
    <br>
    <div>
      <div class="pubImg">
        <img src="../img/El escriba del Barro.jpg" class="rounded mx-auto d-block" alt="">
      </div>
    </div>
</div>
<br>
<br>
<div>
<div>
  <button type="button" class="btn btn-light">Pedir Libro</button>
</div>
<br>
<br>

<div>
  <div class="izq">
      <img class="img" src="../img/foto perfil.jpg" alt="">
  </div>
  <div class="der">
      Andres Abril <br>
      Autor <br>
      Romance - Ciencia Ficcion
  </div>
</div>
<div>
  <div class="desc">
      <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
  </div>
  <br>
  <div>
    <div class="pubImg">
      <img src="../img/El libro negro de las horas.jpg" class="rounded mx-auto d-block" alt="">
    </div>
  </div>
</div>
<br>
<br>
<div>
<div>
<button type="button" class="btn btn-light">Pedir Libro</button>
</div>
<br>
<br>

<div>
  <div class="izq">
      <img class="img" src="../img/foto perfil.jpg" alt="">
  </div>
  <div class="der">
      Andres Abril <br>
      Autor <br>
      Romance - Ciencia Ficcion
  </div>
</div>
<div>
  <div class="desc">
      <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
  </div>
  <br>
  <div>
    <div class="pubImg">
      <img src="../img/El medallon de fuego.jpg" class="rounded mx-auto d-block" alt="">
    </div>
  </div>
</div>
<br>
<br>
<div>
<div>
<button type="button" class="btn btn-light">Pedir Libro</button>
</div>
<br>
<br>

<div>
  <div class="izq">
      <img class="img" src="../img/foto perfil.jpg" alt="">
  </div>
  <div class="der">
      Andres Abril <br>
      Autor <br>
      Romance - Ciencia Ficcion
  </div>
</div>
<div>
  <div class="desc">
      <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
  </div>
  <br>
  <div>
    <div class="pubImg">
      <img src="../img/El pasado nunca nos olvida.jpg" class="rounded mx-auto d-block" alt="">
    </div>
  </div>
</div>
<br>
<br>
<div>
<div>
<button type="button" class="btn btn-light">Pedir Libro</button>
</div>
<br>
<br>

<div>
  <div class="izq">
      <img class="img" src="../img/foto perfil.jpg" alt="">
  </div>
  <div class="der">
      Andres Abril <br>
      Autor <br>
      Romance - Ciencia Ficcion
  </div>
</div>
<div>
  <div class="desc">
      <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
  </div>
  <br>
  <div>
    <div class="pubImg">
      <img src="../img/Harry potter.jpg" class="rounded mx-auto d-block" alt="">
    </div>
  </div>
</div>
<br>
<br>
<div>
<div>
<button type="button" class="btn btn-light">Pedir Libro</button>
</div>
<br>
<br>

<div>
  <div class="izq">
      <img class="img" src="../img/foto perfil.jpg" alt="">
  </div>
  <div class="der">
      Andres Abril <br>
      Autor <br>
      Romance - Ciencia Ficcion
  </div>
</div>
<div>
  <div class="desc">
      <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, officia veniam? Deleniti molestiae, accusamus atque consequatur, alias amet blanditiis ut recusandae nam veritatis voluptatibus tempora dolores sunt dignissimos expedita quod.</p>
  </div>
  <br>
  <div>
    <div class="pubImg">
      <img src="../img/La cortesana fiel.jpg" class="rounded mx-auto d-block" alt="">
    </div>
  </div>
</div>
<br>
<br>
<div>
<div>
<button type="button" class="btn btn-light">Pedir Libro</button>
</div>
<br>
<br>
        </article>
    </main>
</body>
</html>