<?php
    session_start();

    include_once("php/config.php");
    if(!isset($_SESSION['valid']))
    {
        header("Location:Login_Page_User.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="Main_Pages_Design.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>COEC</title>
    <link rel="icon" type="image/png" href="logo_Of_Carbon.png">

</head>
<body>
    <!--Navbar-->
    <?php
      include_once('Header.php');
      include_once('php/config.php');
    ?>

    
      <!--Navbar-->

      <!--Slide show-->
      <div id="carouselExample" class="carousel slide mb-4" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="title-slideShow">Car Carbon</div>
                <img src="https://sparkoncept.com/wp-content/uploads/2022/03/17.-What-percentage-of-carbon-emissions-come-from-cars-scaled.jpg" class="news d-block w-100" alt="Car Carbon">
            </div>
            <div class="carousel-item">
              <div class="title-slideShow">Food Carbon</div>
                <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/1172/production/_121266440_green_diet_article_image_976-nc.jpg" class="news d-block w-100" alt="Food Carbon">
            </div>
            <div class="carousel-item">
              <div class="title-slideShow">Factor Carbon</div>
                <img src="https://assets.terrapass.com/wp-content/uploads/2022/08/carbon-dioxide-emissions-from-electricity-photo-of-factory-smoke.jpg" class="news d-block w-100" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="titleOf-CEF">
      <h2 style="margin-top:20px;margin-bottom: 20px;">Carbon Emmision</h2>
    </section>

    <div class="Container-one">
      <div class="pictureWord-Container-one">
          <div class="item-include">
            <h4 style="margin-bottom: 10px;margin-top: 10px;"><strong>Electric</strong></h4>
            <img class="Icon-one" src="Electric_Icon.jpg" alt="Electric Icon" style="margin-bottom: 10px;margin-top: 10px;">
            <p>All household appliances <br>have carbon emissions, <br>please turn them off <br>when not in use</p>
          </div>
          <div class="item-include">
            <h4 style="margin-bottom: 10px;margin-top: 10px;"><strong>Transportation</strong></h4>
            <img class="Icon-one" src="Car_Icon.jpg" alt="Car Icon" style="margin-bottom: 10px;margin-top: 10px;">
            <p>Reduce to drive or use the <br>electrical car, more to use the public transportation.</p>
          </div>
          <div class="item-include">
            <h4 style="margin-bottom: 10px;margin-top: 10px;"><strong>Food</strong></h4>
            <img class="Icon-one" src="Food_Icon.png" alt="Electric Icon" style="margin-bottom: 10px;margin-top: 10px;">
            <p>Try to choose what is available <br>in the current country to <br>reduce transportation costs.</p>
          </div>
      </div>

      <div class="pictureWord-Container-two">
        <div class="item-include">
          <h4 style="margin-bottom: 10px;margin-top: 10px;"><strong>Buying</strong></h4>
          <img class="Icon-one" src="Buying_Icon.jpg" alt="Buying Icon" style="margin-bottom: 10px;margin-top: 10px;">
          <p>Use fewer plastic bags,<br> use more recycling bags, <br>and buy durable goods.</p>
        </div>
        <div class="item-include">
          <h4 style="margin-bottom: 10px;margin-top: 10px;"><strong>Recycle</strong></h4>
          <img class="Icon-one" src="RecycleBin_Icon.jpg" alt="Recycle Icon" style="margin-bottom: 10px;margin-top: 10px;">
          <p>Reduce to drive or use the <br>electrical car, more to use the public transportation.</p>
        </div>
        <div class="item-include">
          <h4 style="margin-bottom: 10px;margin-top: 10px;"><strong>Solar Energy</strong></h4>
          <img class="Icon-one" src="Solar_Energy_Icon.jpg" alt="Solar_Energy Icon" style="margin-bottom: 10px;margin-top: 10px;">
          <p>If you have the choice,<br> you can power your home <br>with solar energy.</p>
        </div>
      </div>
    </div>
</body>
</html>
