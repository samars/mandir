<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mandir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/css.css" rel="stylesheet" type="text/css">
  <link href="css/montserrat.css" rel="stylesheet" type="text/css">
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>
<div class="container">
<h1 align="center">Photo Gallery</h1>
<p align="center">Quick tour of <b>MANDIR</b> through photo gallery.</p>
<br>
    <?php for($i = 0; $i < 13; $i++) {?>
        <div class="panel panel-danger panel-height-main">
            <div class="panel-body">
<div class="row">
    <div class="col-xs-12 col-sm-3 col-lg-3 col-md-12">
        <div class="panel panel-danger panel-height">
            <div class="panel-body panel-shadow">
                <img class ="image-center" src="ny.jpg" alt="Goddess" style="width:100%;">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-lg-3 col-md-12">
        <div class="panel panel-danger panel-height">
            <div class="panel-body panel-shadow">
                <img class ="image-center" src="ny.jpg" alt="Goddess" style="width:100%;">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-lg-3 col-md-12">
        <div class="panel panel-danger panel-height">
            <div class="panel-body panel-shadow">
                <img class ="image-center" src="ny.jpg" alt="Goddess" style="width:100%;">
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-lg-3 col-md-12">
        <div class="panel panel-danger panel-height">
            <div class="panel-body panel-shadow">
                <img class ="image-center" src="ny.jpg" alt="Goddess" style="width:100%;">
            </div>
        </div>
    </div>
</div>
</div>
        </div>
    <?php }?>
    
</div>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
  <div id="header"></div>
  <div id="footer"></div>
  <script src="scripts/scripts_bel.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeJqBGt6bP1EuB9SGAsyySpYB_SlkfS3o&callback=myMap"></script>
  <style>
      .panel-height{
        height: 130px;
      }
      .panel-height-main{
        height: 164px;
        background-color: #e6dfdf;
      }
      .panel-shadow{
        padding: 10px 10px 20px 10px;
        border: 1px solid #BFBFBF;
        background-color: white;
        box-shadow: 10px 10px 5px #aaaaaa;
      }
      </style>
</body>
</html>