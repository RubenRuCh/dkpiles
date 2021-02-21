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
    <link rel="stylesheet" href="./assets/css/fotos.css">

    <script src="./scripts/js/main.js"></script>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header class="header"><?php require "./assets/components/header.html" ?></header>


        <!-- MAIN -->
        <main>
            <h1>Álbum de fotos</h1>
            <script onload="hideElfsightAdd();" src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-112fb3d7-bd92-4d09-9771-4ecaada95d0c"></div>
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
        $(() => { loadComponents('Fotos') });

        // Clear elfsight addy
        const hideElfsightAdd = function(){ 
            setTimeout(() => {
                document.querySelector('a.eapps-link').style.display = 'none';
               }, 1000);

            setTimeout(() => {
                $("div.eapps-instagram-feed-posts-inner").addClass('scrollable');

                var styles = "overflow: hidden !important; overflow-y: auto !important; -webkit-overflow-scrolling: touch !important;";

                if(window.matchMedia("(max-width: 768px)").matches){
                    styles += "max-height: 55vh;";
                }

                $("div.eapps-instagram-feed-posts-inner").attr('style', styles);

                // Add smooth scroll when loading more photos
                $(".eapps-instagram-feed-posts-grid-load-more-text-visible").click(() => {
                    setTimeout(() => {
                        $('html, body, main, div.eapps-instagram-feed-posts-inner').animate({
                            scrollTop: $(this).scrollHeight}, 1000);
                    }, 2000);

                    $('html, body, main, div.eapps-instagram-feed-posts-inner').scrollTop($(this).scrollHeight);
                });;

            }, 3000);
               
        };
    </script>
</body>
</html>