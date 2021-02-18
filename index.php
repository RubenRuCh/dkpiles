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
    <link rel="stylesheet" href="./assets/css/index.css">

    <script src="./scripts/js/main.js"></script>
    <script id="widg" src="http://www.windguru.cz/js/wgs_widget"></script>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header class="header"><?php require "./assets/components/header.html" ?></header>

        <!-- MAIN -->
        <main>
            <h2>¡Bienvenid@ al Club deportivo Dunes Kite Piles! PRUEBA DEPLOY AUTOMATICO!!!!ads!!!</h2>

            <!-- Weather apis -->
            <section class="weatherCarrousel">
              <h3>Herramientas meteorológicas</h3>
              <div id="carouselWeather" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <!-- El Tiempo -->
                    <div class="carousel-item active">
                      <div id="c_25909d407c4ac3ae43bb5f74338a0cb6" class="normal d-block w-100"></div><script type="text/javascript" src="https://www.eltiempo.es/widget/widget_loader/25909d407c4ac3ae43bb5f74338a0cb6"></script>
                    </div>


                    <!-- PREVISIÓN DE WINDGURU -->
                    <div class="carousel-item">
                      <div class="d-block w-100" id="meteo_piles">
                        <span id="loading">Cargando vientos...</span>
                        <!-- Meteo -->
                        <script id="wg_fwdg_504236_3_1612197394034">
                        (function (window, document) {
                            var loader = function () {
                            var arg = ["s=504236" ,"m=3","uid=wg_fwdg_504236_3_1612197394034" ,"wj=knots" ,"tj=c" ,"waj=m" ,"odh=0" ,"doh=24" ,"fhours=240" ,"hrsm=3" ,"vt=forecasts" ,"lng=es" ,"p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCP1s,RATING"];
                            var script = document.createElement("script");
                            script.addEventListener("load", () => {
                                document.querySelector('span#loading').innerHTML = "";
                            });
                            var tag = document.getElementsByTagName("script")[0];
                            script.src = "https://www.windguru.cz/js/widget?"+(arg.join("&"));
                            tag.parentNode.insertBefore(script, tag);
                            };
                            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                        })(window, document);
                        </script>
                    </div> 
                    </div>


                    <!-- Webcam Piles -->
                    <div class="carousel-item">
                      <section class="webcam">
                        <div id="hora">
                            01-02-2021 11:57:30
                        </div>
                        <div id="webcam-visor">
                          <img
                            style="position:absolute; z-index:127; display:none; "
                            id="popimage0"
                            src="http://turiscam.comunitatvalenciana.com/piles.jpg?0.6469837288851448"
                            alt=""
                          />
                          <img
                            style="position:absolute; z-index:131; display:none; "
                            id="popimage1"
                            src="http://turiscam.comunitatvalenciana.com/piles.jpg?0.9859589556649855"
                            alt=""
                          />
                          <img
                            style="position:absolute; z-index:132; display:none; "
                            id="popimage2"
                            src="http://turiscam.comunitatvalenciana.com/piles.jpg?0.27504339971864056"
                            alt=""
                          />
                        </div>
                      </section>
                    </div>


                    <!-- MOSTRAR DATOS ESTACIÓN METEOR -->
                    <div class="carousel-item">
                      <div class="d-block w-100" id="wgs_widget_51_1403353076147"></div> 
                    </div>


                  </div>

                    <a class="carousel-control-prev" href="#carouselWeather" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselWeather" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>



            
            <!-- Small fotos -->
            <section class="smallInstagramAPI">
              <h3>Últimas fotos</h3>
              <div id="carouselPhotosSmall" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="./assets/media/DSC_0040.JPG" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./assets/media/DSC_0104.JPG" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="./assets/media/DSC_0232.JPG" alt="Third slide">
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


    <!-- Load header, aside and footer -->
    <script type="text/javascript">
        $(() => { loadComponents('Home') });
    </script>

    <!-- Prev -->
    <script type="text/javascript">
        function llamarWidget(){
            WgsWidget({
            id_station: 51,
            wj: 'knots',
            tj: 'c',
            tmprh: true,
            date_format: 'Y-m-d H:i:s T',
            divid: 'wgs_widget_51_1403353076147',
            type: 'curr'
            });
        }
        llamarWidget();
        setInterval(llamarWidget,60000);/* Quitar si no queréis que actualice */
    </script>


  <!--Script refresh de paginas-->
  <script type="text/javascript"> 
    function refresh_image(image_to_refresh = 0) {
      var webcam_TB = $('.node-type-webcam #TB_Image');
      if (webcam_TB.parent().siblings('#TB_caption').children('#TB_secondLine').html() == '') {
        webcam_TB.show();
      }
    
      if (webcam_TB.parent().siblings('#TB_caption').children('#TB_secondLine').html() == '') {
        webcam_TB.attr('src', path + '?' + Math.random());
      }
    
      var image = $('#popimage' + image_to_refresh);
      path = image.attr('src').split("?");
      path = path[0];
      image.attr('src', path + '?' + Math.random());
      setTimeout('update_zindex(' + image_to_refresh + ')', 150);
      image_to_refresh++;
      image_to_refresh = image_to_refresh % 3;
      var webcam_timeout = parseInt(3) * 1000;
      setTimeout('refresh_image(' + image_to_refresh + ')', webcam_timeout);
    }
    
    function hora_actual() {
      var fecha = new Date();
      var dia = fecha.getDate();
      var mes = fecha.getMonth()+1;
      var anyo = fecha.getFullYear();
      var hora = fecha.getHours();
      var minuto = fecha.getMinutes();
      var segundo = fecha.getSeconds();
      if (dia < 10) dia = "0" + dia;
      if (mes < 10) mes = "0" + mes;
      if (hora < 10) hora = "0" + hora;
      if (minuto < 10) minuto = "0" + minuto;
      if (segundo < 10) segundo = "0" + segundo;
      var hora_actual = dia + "-" + mes + "-" + anyo + " " + hora + ":" + minuto + ":" + segundo;
      $('#hora').text(hora_actual);
    }
    
    function update_zindex(image_to_refresh) {
      current_zindex = parseInt($('#popimage' + image_to_refresh).css('z-index'));
      $('#popimage' + image_to_refresh).css('z-index', (current_zindex + 3)).show();
      hora_actual();
    }
    
    $( document ).ready(function(){
      $('#popimage0').show();
      refresh_image(0);
      hora_actual();	
    });
  </script>

  <!--
  <script type="text/javascript">
    /* Cambiad URL de la cámara */
    var path = 'http://turiscam.comunitatvalenciana.com/piles.jpg';
  /****************************/
    var image_to_refresh = 0;
    function refresh_image(image_to_refresh) {
      var image = document.querySelector('img#popimage' + image_to_refresh);
      image.src = path + '?' + Math.random();
      setTimeout(function(){ update_zindex(image_to_refresh) }, 150);
      //setTimeout('update_zindex(' + image_to_refresh + ')', 150);
      image_to_refresh++;
      image_to_refresh = image_to_refresh % 3;
      var webcam_timeout = parseInt(3) * 1000;
      setTimeout(function(){ refresh_image(image_to_refresh) }, webcam_timeout);
      //setTimeout('refresh_image(' + image_to_refresh + ')', webcam_timeout);
    }

    function hora_actual() {
      var fecha = new Date();
      var dia = fecha.getDate();
      var mes = fecha.getMonth() + 1;
      var anyo = fecha.getFullYear();
      var hora = fecha.getHours();
      var minuto = fecha.getMinutes();
      var segundo = fecha.getSeconds();
      if (dia < 10) dia = '0' + dia;
      if (mes < 10) mes = '0' + mes;
      if (hora < 10) hora = '0' + hora;
      if (minuto < 10) minuto = '0' + minuto;
      if (segundo < 10) segundo = '0' + segundo;
      var hora_actual = dia +'-'+mes+'-'+anyo+' '+hora+':'+minuto+':'+segundo;
      document.querySelector('div#hora').innerHTML=hora_actual;
    }

    function update_zindex(image_to_refresh) {
      current_zindex = parseInt(document.querySelector('img#popimage' + image_to_refresh).style.zIndex);
      var imag=document.querySelector('img#popimage' + image_to_refresh);
      imag.style.zIndex=current_zindex + 3;
      imag.style.display="block";
      hora_actual();
    }
    /* MAIN */
    document.querySelector('img#popimage0').style.display="block";

    refresh_image(0);
    hora_actual();

  </script>
  -->
</body>
</html>