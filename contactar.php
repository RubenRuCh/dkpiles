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
    <link rel="stylesheet" href="./assets/css/contactar.css">

    <script src="./scripts/js/main.js"></script>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <header class="header"><?php require "./assets/components/header.html" ?></header>


        <!-- MAIN -->
        <main>
            <h1>Contactar</h1>
            
            <section class="containerContact">
                
                <section class="contactForm">
                    <h2>Escribenos</h2>
                    <form action="mailto:DKpiles@gmail.com" method="get">
                        <div class="form-group">
                          <label for="subject">Asunto</label>
                          <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectHelp" placeholder="Querido Club DKPiles" required>
                          <small id="subjectHelp" class="form-text text-muted">Te responderemos lo antes posible</small>
                        </div>
                        <div class="form-group">
                          <label for="body">Mensaje</label>
                          <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Contactar</button>
                      </form>
                </section>

                <section class="clubLocation">
                    <h2>Dónde estamos</h2>
                    <iframe src="https://www.google.com/maps/d/embed?mid=1N0s_d_QzJJGfTchwBaHpICy9vuE&hl=es"></iframe>
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
        $(() => { loadComponents('Contactar') });
    </script>
</body>
</html>