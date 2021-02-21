<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

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
                <h1>Cómo hacerme socio</h1>

                <section class="contactForm">
                    <form action="mailto:DKpiles@gmail.com" method="get">
                        <div class="form-group">
                          <label for="subject">Asunto</label>
                          <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectHelp" placeholder="Unirme al Club DKPiles" required>
                          <small id="subjectHelp" class="form-text text-muted">Te responderemos lo antes posible</small>
                        </div>
                        <div class="form-group">
                          <label for="body">Mensaje</label>
                          <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Nombre completo: &#10;Fecha de nacimiento: &#10;DNI: &#10;Teléfono: &#10;Email de contacto: " required>Nombre completo: &#10;Fecha de nacimiento: &#10;DNI: &#10;Teléfono: &#10;Email de contacto: </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Hacerme socio</button>
                      </form>
                </section>

                <!-- Nautical offers -->
                <section class="nauticalOffers">
                    <h3>Ofertas para miembros</h3>
                    <div class="top-content">
                        <div class="container-fluid">
                            <div id="carouselOffers" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox">
                                    <div class="carousel-item row no-gutters active">
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/chanclas.jpg"></div>
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/mens.jpg"></div>
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/neopreno.jpg"></div>
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/niño.jpg"></div>
                                    </div>
                                    <div class="carousel-item row no-gutters">
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/tabla.jpg"></div>
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/tabla2.jpg"></div>
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/tablamadera.jpg"></div>
                                        <div class="col-3 float-left"><img class="img-fluid" src="./assets/media/offers/womens.jpg"></div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselOffers" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselOffers" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
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
        const subcurrent = 'Socios';

        $(() => {
            $('nav.submenu').load('assets/components/submenu.html', () => {
                $('li a').filter(`:contains(${subcurrent})`).addClass('subcurrent');
            }); 

        });
    </script>
</body>
</html>