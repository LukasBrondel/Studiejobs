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
        
    <section class="container-fluid intro-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/wolt-featured.jpg" alt="Udbringer hos Wolt">
              <div class="carousel-caption d-none d-md-block">
                <h1>Har du prøvet vores nye app?</h1>
                <p>tekst</p>
                <a href="#" class="slider-btn">Læs mere</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/wolt-featured.jpg" alt="Udbringer hos Wolt">
              <div class="carousel-caption d-none d-md-block">
                <h2>Savner du ekstra lommepenge?</h2>
                <p>Som leverandør for Wolt får du selv mulighed for at styre og planlægge dine arbejdstider efter dine behov. Det eneste krav er, at du har en cykel og en smartphone!</p>
                <a href="#" class="slider-btn">Læs mere</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
    <section class="container">
        <h2>Nye jobopslag</h2>
        <div class="separator"><span>X</span></div>
        
        <article class="row search-job">
            <form class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Postnummer / by">
              </div>
              <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" placeholder="Jobtype">
                    <option>Alle opslag</option>
                    <option>Studiejobs</option>
                    <option>Praktik</option>
                </select>
              </div>
            <button type="submit" class="btn btn-default">Søg job</button>
            </form>
        </article>
        <article class="row nye-jobs">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="job-logo">
                        <img src="images/virksomheder/fk-distribution-logo.png" alt="FK Distribution logo">
                    </div>
                  </td>
                  <td>
                      <h3>Omdeler</h3>
                      <p class="virksomhed">FK Distribution</p>
                  </td>
                  <td class="text-center">8000 Århus C</td>
                  <td class="text-center">12. november</td>
                  <td class="text-center">13-17 år<br/>
                      <a href="#" class="se-opslag">Se opslag</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="job-logo">
                        <img src="images/virksomheder/thomsen-og-co-logo.png" alt="Thomsen&Co logo">
                    </div>
                  </td>
                  <td>
                      <h3>Grafisk designer</h3>
                      <p class="virksomhed">Thomsen&amp;Co</p>
                  </td>
                  <td class="text-center">8000 Århus C</td>
                  <td class="text-center">8. november</td>
                  <td class="text-center">+18 år<br/>
                      <a href="#" class="se-opslag">Se opslag</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="job-logo">
                        <img src="images/virksomheder/alm-brand-logo.png" class="img-fluid" alt="Alm. brand logo">
                    </div>
                  </td>
                  <td>
                      <h3>Mødebooker</h3>
                      <p class="virksomhed">Alm. Brand</p>
                  </td>
                  <td class="text-center">8000 Århus C</td>
                  <td class="text-center">6. november</td>
                  <td class="text-center">+18 år<br/>
                      <a href="#" class="se-opslag">Se opslag</a></td>
                </tr>
              </tbody>
            </table>
            <a href="#" class="se-mere">Se flere jobs</a>
        </article>
    </section>
    <section class="container-fluid hent-vores-app">
        <article class="hent-vores-app">
            <h2>Hent vores app</h2>
            <div class="separator"><span>X</span></div>
            <p class="col-12">Med vores app har du over <span class="bold-text">200 jobopslag</span> lige ved hånden.<br/> 
Hent vores app helt gratis her.</p>
            <a href="#"><img src="images/appstore.png" class="img-fluid download-btn" alt="Download på App Store"></a>
            <a href="#"><img src="images/googleplay.png" class="img-fluid download-btn" alt="Download på Google Play"></a>
            <br/>
            <img src="images/studiejobs-app.png" class="img-fluid app-image" alt="Studiejobs app">
            <article class="row statistik">
                <article class="col-4">
                    <h3>Jobopslag</h3>
                    <hr/>
                    <p>225</p>
                </article>
                <article class="col-4">
                    <h3>CV'er</h3>
                    <hr/>
                    <p>1.230</p>
                </article>
                <article class="col-4">
                    <h3>Virksomheder</h3>
                    <hr/>
                    <p>158</p>
                </article>
            </article>
        </article>  
    </section>
    <section class="container">
        <article class="hvem-bruger-studiejobs row">
            <h2 class="col-12">Hvem bruger Studiejobs.dk?</h2>
            <div class="separator col-12"><span>X</span></div>
            
            <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="images/virksomheder/featured/wolt-logo.png" class="img-fluid" alt="Wolt logo">
            </div>
           <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="images/virksomheder/featured/dansk-supermarked-group-logo.png" class="img-fluid" alt="Dansk Supermarked Group logo">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="images/virksomheder/featured/expert-logo.png" class="img-fluid" alt="Expert logo">
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <img src="images/virksomheder/featured/coop-logo.png" class="img-fluid" alt="Coop logo">
            </div>
            <a href="#" class="se-mere">Se alle kunder</a>
        </article>
    </section>
      
    <?php include 'includes/footer.php';?>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>