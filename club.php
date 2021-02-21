<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DKPiles</title>
    <link rel="icon" type="image/png" href="./assets/media/logo-olas.png"/>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/club.css">

    <script src="./scripts/js/main.js"></script>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header class="header"><?php require "./assets/components/header.html" ?></header>


        <!-- MAIN -->
        <main>
            <!--  SUBMENU -->
            <nav class="submenu"></nav>

            <section class="submain">
                <h1>Club Esportiu</h1>

                <section class="beach">
                    <div id="carouselPhotosSmall" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="./assets/media/DSC_0225.JPG" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/media/DSC_0061.JPG" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="./assets/media/DSC_0181.JPG" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPhotosSmall" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselPhotosSmall" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </section>

                <section class="history">
                    <p>
                        En nuestra zona de Piles, tras el considerable grupo de amantes  
                        y praticantes de kitesurf, y ante las dificultades presentadas 
                        por las prohibiciones y continuas quejas de los bañistas, 
                        decidimos formar el actual club D.K.P.    
                        Tarea difícil, como lo son todas, las que hay 
                        que empezar de cero. Desde la nada  
                        este grupo de amigos, con la iniciativa de legalizar una zona para el disfrute de los amantes del kitesurf, 
                        formamos una Directiva compuesta por
                    </p>

                    <ul class="directiva">
                        <li>Miquel Mahiques</li>
                        <li>Loles Pons</li>
                        <li>Fernando Pons</li>
                        <li>Ana Calabuig</li>
                        <li>Joel Ciscar</li>
                    </ul>

                    <p> 
                        A los que no tenemos mas que agradecimientos por su esfuerzo  
                        y dedicación.<br><br>
                        La solicitud de la zona la se tramita el año 2009 con vigencia 
                        hasta la fecha. Durante el transcurso de las temporadas,  
                        la directiva sufre varios cambios, hasta llegar a la Directiva actual compuesta por:
                    </p>

                    <ul class="directiva">
                        <li>Lala Lanaquera Donet (presidenta)</li>
                        <li>Vicent Savall Ausina (vicepresidente)</li>
                        <li>Carlos Viana Fernández (secretario)</li>
                        <li>Andreu Guillem Ausina (tesorero)</li>
                        <li>Isaac Parres Prefasi (vocal)</li>
                    </ul>

                    <p>
                        En la actualidad el club consta de  mas de 70 socios.  
                        La zona está ubicada al sur del termino de la playa de Piles, 
                        lindando con Oliva. Comarca de La Safor. 
                        Esta comarca cuenta con cinco zonas legalizadas, 
                        dirigidas y gestionadas por sus correspondientes clubs.<br><br>
                        Debido al constante crecimiento de deportistas en este sector, 
                        uno de nuestros mayores retos, en estos momentos, es unificar 
                        criterios con el resto de clubs, para de este modo tratar  
                        correctamente todas las visitas que recibimos durante la temporada. 
                        Y cierto es que la tarea no es nada fácil, aquí <b>está prohibido</b>  
                        navegar y para <b>eliminar</b> esta prohibición, 
                        los socios debemos <b>soportar unos gastos</b>, bastante elevados, 
                        para  poder realizar la practica  de este deporte que tantas 
                        satisfacciones nos aporta.<br><br>
                        Adjuntamos estos dos enlaces, elaborados en la inauguración del canal.<br><br>
                        <a href="http://blogs.comunitatvalenciana.com/kitesurf/2010/08/22/el-club-dunes-kite-piles-inaugura-su-primer-canal-balizado-de-kite-segunda-parte/">Inauguración del canal</a><br><br>
                        <b>Agradecimientos especiales a todos aquellos que han aportado 
                        su apoyo e ilusión por hacer realidad la existencia de este club. 
                        Y con el lema: <br><br>
                        <hr>
                        <span class="lema">Trabajar  en invierno, para navegar en verano</span>
                        <hr>
                        <br>
                        Os deseamos buen viento.</b>
                    </p>
                </section>
            </section>


        </main>

        <!-- ASIDE -->
        <aside><?php require "./assets/components/aside.html" ?></aside>
       

        <!-- FOOTER -->
        <footer><?php require "./assets/components/footer.html" ?></footer>
    </div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></scrip>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(() => { loadComponents('Club') });

        // Load submenu 
        const subcurrent = 'El Club';

        $(() => {
            $('nav.submenu').load('assets/components/submenu.html', () => {
                $('li a').filter(`:contains(${subcurrent})`).addClass('subcurrent');
            }); 

        });
    </script>
</body>
</html>