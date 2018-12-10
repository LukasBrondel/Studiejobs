<!doctype html>
<html lang="dk">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom stylesheet minified -->
	<link href="css/style.min.css" rel="stylesheet">
    
    <title>Studiejobs.dk</title>
  </head>
  <body>
 
    <?php include 'includes/header.php';?>

    <section class="container underside">
        <article class="row">
            <h1 class="col-12">Kontakt os</h1>
            <div class="separator col-12"><span><i class="fas fa-map-marker-alt"></i></span></div>
        </article>
        
        <article class="row kontaktFormular">
            <form class="col-sm-12 col-lg-6" action="index.php">
              <div class="form-group">
                <label for="inputAddress">Navn</label>
                <input type="text" class="form-control" id="inputName" placeholder="Navn" required>
              </div>
              <div class="form-group">
                <label for="inputAddress2">Virksomhed</label>
                <input type="text" class="form-control" id="inputVirksomhed" placeholder="Virksomhed">
              </div>
              <div class="form-row">
                <div class="form-group col-md-12 col-lg-6">
                  <label for="inputMail">E-mail</label>
                  <input type="text" class="form-control" id="inputMail" placeholder="E-mail" required>
                </div>
                <div class="form-group col-md-12 col-lg-6">
                  <label for="inputTlf">Tlf.</label>
                  <input type="text" class="form-control" id="inputTlf" placeholder="Telefon">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

            <address class="col-sm-12 col-lg-6">
                <h3>Studiejobs.dk</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Skindergade 15, København K</li>
                    <li><i class="fas fa-phone"></i> <a href="tel:+4570272871">+45 7027 2871</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:support@studiejobs.dk?Subject=Kontakt%20Studiejobs.dk" target="_top">support@studiejobs.dk</a></li>
                </ul>
            </address>
        </article>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2249.501380557798!2d12.5743425!3d55.6802704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465253108a60dc91%3A0xd2c769756c5abf4a!2sSkindergade+15%2C+1159+K%C3%B8benhavn!5e0!3m2!1sen!2sdk!4v1544448738577" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen class="googleMaps"></iframe>    
    </section>
      
    <?php include 'includes/footer.php';?>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>