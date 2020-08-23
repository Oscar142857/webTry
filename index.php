<!DOCTYPE html>
<html lang="en">
<head>
  <title>儒學道多元文化學習网</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">儒學道多元文化學習网</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="info.php">最新消息<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="learn.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          學習平台
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="confucian.php">儒敎</a>
          <a class="dropdown-item" href="buddha.php">釋敎</a>
          <a class="dropdown-item" href="tao.php">道敎</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">聯絡我們</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bgtao.jpg" alt="">
    </div>
    <div class="carousel-item">
      <img src="images/lf1.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/bgold.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<section class="my-3">
    <div class="py-5">
        <h2 class="text-center font-weight-bold">關于我們</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/about.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <p class="font-weight-bold py-2 display-4">建國君民 敎學爲先</p>
            <p class="py-3"><h3>儒釋道，三敎合一，誠本一者。三者非宗敎，世閒萬本一，
                佛之云一切灋從心想生。孔夫子意人之初，性本譱。
                眾生自性實不二。道可道，非常道，名可名，非常名。
                若如色卽是空，空卽是色。詞別意合。
                乃至後聖攷之，異曲同工，智者亼一。</h3></p>
            <a href="about.php" class="btn btn-success">了解更多</a>
            <hr class="visible-xs">
        </div>
    </div>
    </div>

</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center font-weight-bold">學習平台</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top cardImg" src="images/cards/cm.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">儒家</h4>
                    <p class="card-text">人之初 性本譱</p>
                    <a href="#" class="btn btn-primary">轉至儒門</a>
                </div>
                </div>
            </div> 

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top cardImg" src="images/cards/bm.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">佛家</h4>
                    <p class="card-text">看破放下</p>
                    <a href="#" class="btn btn-primary">轉至佛門</a>
                </div>
                </div>
            </div>  

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top cardImg" src="images/cards/tm.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">道家</h4>
                    <p class="card-text">萬物一歸</p>
                    <a href="#" class="btn btn-primary">轉至道門</a>
                </div>
                </div>
            </div>  

        </div>

    </div>


</section>


<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4 bg-dark">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fa fa-google"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fa fa-linkedin"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fa fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white bg-dark">© 2020 Copyright:
    <a href="https://www.google.com/" class="foothref" target="_blank">webTry.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>