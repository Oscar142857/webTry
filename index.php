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

<?php include 'menu.php'; ?>


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
                    <a href="confucian.php" class="btn btn-primary">轉至儒門</a>
                </div>
                </div>
            </div> 

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top cardImg" src="images/cards/bm.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">佛家</h4>
                    <p class="card-text">看破放下</p>
                    <a href="buddha.php" class="btn btn-primary">轉至佛門</a>
                </div>
                </div>
            </div>  

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top cardImg" src="images/cards/tm.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">道家</h4>
                    <p class="card-text">萬物一歸</p>
                    <a href="tao.php" class="btn btn-primary">轉至道門</a>
                </div>
                </div>
            </div>  

        </div>

    </div>


</section>

<?php include 'footer.php'; ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>