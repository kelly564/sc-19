<!DOCTYPE html>
<html lang="en">
<head>
  <title>SC-19</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
    background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div style="background-image: url(evo.PNG);background-repeat: no-repeat;position: relative;background-position: center;background-size: cover; " class="jumbotron">
  <div  class="container text-center">
    <h1>Stop Covid-19</h1>      
    <p> Precausion, Statistique & Oracle</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SC-19</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Precausion</a></li>
        <li><a href="statistique.php">Statistique</a></li>
        <li><a href="oracle.php">Oracle</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li class="active"><a href="#">Apropos</a></li>

      </ul>
      
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
     <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading ">Apropos</div>
        <h3  style="font-style: oblique;" class="text-center">
          Les essentiels pour la prévention et le contrôle du virus. La prévention et le contrôle de l’épidémie du COVID-19 sont assurés par une grande diversité d’acteurs publics et privés au contact des communautés locales. C'est pourquoi SC-19  a créé cette plateform pour soutenir les acteurs locaux des pays francophones avec les communautés.
        </h3>
      </div>
    </div>
  </div>
</div>



  
<footer class="container-fluid text-center">
    <div style="font-size: 15px;" class="text-center"><a href="admin.php">Admin   .</a> Copyright 2020    SC-19.netlify.app</div>
</footer>

</body>


</html>

