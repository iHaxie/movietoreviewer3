<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheey" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
  ="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">    
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
     <?php require_once('inc/header.php')?>

      <section class="seccion contenedor">
        <h2>La mejor pagina de reviewers sobre peliculas</h2>
        <p>
            Somos la mejor pagina web donde encontras opiniones hechas por la comunidad
            donde cada pelicula recibe un calficación en base a las calificaciones que
            dieron los usuarios.
        </p>
      </section> <!--.Sección -->

      <section class="spec-moviereviewer  ">
        <div class="contenedor-video clearfix">
            <video autoplay loop poster="posterimage.jpg">
                <source src="video/La sala de cine.mp4"   type="video/mp4">
                <source src="video/La sala de cine.webm"  type="video/webm">
                <source src="video/La sala de cine.ogv"   type="video/ogv">
            </video>
        </div> <!--.contenedor video-->
        <div class="contenido-autores">
          <div class="contenedor">
              <div class="sobre-autores">
                  <h2>Sobre la pagina</h2>
                  <nav class="menu-sobre">
                    <a href="#"><i class="fas fa-user"     aria-hidden="true"></i> Autores</a>
                    <a href="#"><i class="fas fa-comments" aria-hidden="true"></i> Reviewer</a>
                    <a href="#"><i class="fas fa-marker"   aria-hidden="true"></i> Calificación</a>
                    </nav>

                    <div id="autores" class="info-curso ocultar clearfix">
                      <div class="detalle-autores">
                        <h3>DATOS DE LOS AUTORES</h3>
                        <p><i class="fas fa-user"     aria-hidden="true"></i> José Antonio Utrera Díaz</p>
                        <p><i class="fas fa-id-card"></i> Número de control: <span>E15020798</span></p>
                        <p><i class="fas fa-university"></i> Universidad: Instituto Tecnologico de Veracruz </p>
                      </div>
                      <div class="detalle-autores">
                          <p><i class="fas fa-user"     aria-hidden="true"></i> Adolfo Pastelin Enciso</p>
                          <p><i class="fas fa-id-card"></i> Número de control: <span>E15020605</span></p>
                          <p><i class="fas fa-university"></i> Universidad: Instituto Tecnologico de Veracruz </p>
                        </div>
                    </div><!--.detalle-autores-->
             </div><!--.sobre-autores-->
           </div><!--.contenedor-->
         </div> <!--.Contenido-autores-->
      </section> <!--.Sección-->

      <section class="peliculas contenedor seccion  clearfix  ">
        <h2> NUESTRAS MEJORES PELICULAS </h2>
          <ul class="most-movies">
              <li>
                  <div class="most-top">
                  <img src="img/poster1.jpg">
                  <p><i id="corona-gold"class="fas fa-crown"></i></p>
                  </div>
              </li>
              <li>
                  <div class="most-top">
                  <img src="img/poster2.jpg">
                  <p><i id="corona-silver"class="fas fa-crown"></i></p>
                  </div>
              </li>
              <li>
                  <div class="most-top">
                  <img src="img/poster3.jpg">
                  <p><i id="corona-bronze"  class="fas fa-crown"></i></p>
                  </div>
              </li>
          </ul>
      </section>

      <section class="peliculas contenedor seccion  clearfix  ">
          <h2> NUESTRAS PEORES PELICULAS </h2>
            <ul class="less-movies">
                <li>
                    <div class="less-top">
                    <img src="img/poster5.jpg">
                    <p><i id="corona-gold"class="fas fa-crown"></i></p>
                    </div>
                </li>
                <li>
                    <div class="less-top">
                    <img src="img/poster5.jpg">
                    <p><i id="corona-silver" class="fas fa-crown"></i></p>
                    </div>
                </li>
                <li>
                    <div class="less-top">
                    <img src="img/poster5.jpg">
                    <p><i id="corona-bronze" class="fas fa-crown"></i></p>
                    </div>
                </li>
            </ul>
        </section>
        <footer class="contenido-footer">
            <div class="contenedor clearfix">
                <div class="footer-informacion">
                    <h3>sobre <span>creación de la pagina</span></h3>
                    <p>José Antonio Utrera Díaz </p>
                    <p id="comentario">"Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica"</p>
                    <p>Adolfo Pastelin Enciso</p>
                    <p id="comentario">"Cuando tenga mi lap haré muchas cosas en la pagina web. 
                      KAPPA DE ALL MIGTH"</p>
                  </div>
                <div class="ultimos-postFacebook">
                     <h3>Ultimos post en <span>Facebook</span></h3>
                    <ul>
      
                      <li>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                      </li>
                      <li>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                      </li>
                      <li>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                      </li>
                    </ul>
                </div>
                <div class="menu">
                     <h3>Redes sociales <span>de los autores</span></h3>
                      <nav class="redes-sociales">
                      <p>José Antonio Utrea Díaz</p>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a> 
                      <p>Adolfo Pastelin Enciso</p> 
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab  fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a> 
                    </nav>
                    </div>
            </div>
            <p class="copyright">Todos los derechos Reservados MOVIEREVIEWER<i class="far fa-copyright"></i> 2019</p>
        </footer>

  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
