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
                <h1>Vientos navegables</h1>

                <section class="winds">
                 <!-- PREVISIÓN DE WINDGURU -->
                 <div class="d-block w-100" id="meteo_piles">
                    <span id="loading">Cargando vientos...</span>
                    <!-- Meteo -->
                    <script id="wg_fwdg_504236_3_1612197394034">
                          (function (window, document) {
                            var loader = function () {
                              var arg = ["s=504236" ,"m=3","uid=wg_fwdg_504236_3_1612197394034" ,"wj=knots" ,"tj=c" ,"waj=m" ,"odh=0" ,"doh=24" ,"fhours=240" ,"hrsm=3" ,"vt=forecasts" ,"lng=es" ,"p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCP1s,RATING"];
                              var script = document.createElement("script");
                              var tag = document.getElementsByTagName("script")[0];
                              script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                              tag.parentNode.insertBefore(script, tag);
                              document.querySelector("span#loading").innerText = '';
                            };

                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                            })(window, document);
                        </script>
                </div> 

                    <!-- Only show on medium-bigs screen -->
                    <div class="pc">
                        <img src="./assets/media/vientoskitesurf.jpg" alt="Tabla explicativa vientos navegables"> 
                    </div>

                    <img src="./assets/media/vientosnavegables.jpg" alt="Grafico de vientos navegables">
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
        const subcurrent = 'Vientos';

        $(() => {
            $('nav.submenu').load('assets/components/submenu.html', () => {
                $('li a').filter(`:contains(${subcurrent})`).addClass('subcurrent');
            }); 

        });
    </script>
</body>
</html>