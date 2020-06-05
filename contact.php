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
<!--<?php 
ini_set('SMTP', 'localhost');
ini_set('smtp_port', 25);
$nom= $_POST['nom']; 
$mail=$_POST['mail']; 

$message=$_POST['message']; 

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="Help"; 
$destinataire="garywizy566@gmail.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?>-->

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
      <a class="navbar-brand" href="index.php">SC-19</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Precausion</a></li>
        <li><a href="statistique.php">Statistique</a></li>
        <li><a href="oracle.php">Oracle</a></li>
        <li class="active"><a href="#" >Contact</a></li>
        <li><a href="about.php">Apropos</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading">CONTACT</div>
        <div class="panel-body col-sm-6"><img src="Contact.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer col-sm-6">
          <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Lome, Togo</p>
      <p><span class="glyphicon glyphicon-phone"></span> +228 97979202</p>
      <p><span class="glyphicon glyphicon-envelope"></span> support@sc-19.com</p>
      <p><strong>TOGO Covid-19: </strong>Numero d'urgence <span style="color: red">111</span></p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <form method="post" enctype="application/x-www-form-urlencoded" name="formulaire">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="nom" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="mail" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div></div>
      </div>
    </div>
    
    </div>
    
</div><br>
  
<footer class="container-fluid text-center">
    <div style="font-size: 15px;" class="text-center"> Copyright 2020    SC-19.netlify.app</div>
</footer>

</body>


</html>







; For Win32 only.
; http://php.net/smtp
SMTP = localhost
; http://php.net/smtp-port
smtp_port = 25

