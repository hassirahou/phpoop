
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Animals</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet" >

    <!-- Favicons -->




    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Accueil</a></li>
            <li><a href="#" class="text-white">Nos Services</a></li>
            <li><a href="#" class="text-white">Nos Tarifs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="img/emergency-treatment.svg" width="30px" height="30px" alt="">
        <strong>CVS Vétérinaires</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
  <div class="card mb-6 shadow-sm">
      <h1>CVS Vétérinaires</h1>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container jumbotron text-left">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/cat.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Chat</h1>
                <?php
                    include("chat.php"); 
                    ?>


              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/cheval.jpg" alt="" width="100%" height="225">
            <div class="card-body">

            <h1>Cheval</h1>
            <?php
                    include("cheval.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img/chien.jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Chien</h1>
                <?php
                    include("chat.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="img\perroquet .jpg" alt="" width="100%" height="225">
            <div class="card-body">
                <h1>Perroquet</h1>

                <?php
                    include("chat.php"); 
                    ?>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>



    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>&copy; CVS </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.js"></script>
      </body>
</html>
