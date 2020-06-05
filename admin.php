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
      <a class="navbar-brand" href="index.php">SC-19</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Precausion</a></li>
        <li><a href="statistique.php">Statistique</a></li>
        <li><a href="oracle.php">Oracle</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">Apropos</a></li>

      </ul>
      
    </div>
  </div>
</nav>
<?php
require("functions.php");
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

            
            $username = checkEmptyInput($_POST['user']);
            $password = checkEmptyInput($_POST['pwd']);
    
if($username !== "" && $password !== "")
    {
       
        if($username == "kelly" && $password == "kelly") // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['user'] = $username;
           header('Location: update.php');
        }
        else
        {
           header('Location: admin.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: admin.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}


?>
<form class="form-horizontal" role="form" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                     ?>>
                  <div class="alert alert-danger text-center">
                <strong>Erreur!!!</strong> Mots de passe ou username incorrecte
                </div>
                   <?php
                }
                ?>


  
<footer class="container-fluid text-center">
    <div style="font-size: 15px;" class="text-center"><a href="admin.php">Admin   .</a> Copyright 2020    SC-19.netlify.app</div>
</footer>

</body>


</html>

