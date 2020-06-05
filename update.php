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
<?php
      require("db_conn.php");
       require("functions.php");
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

            
            $cas = $_POST['cas'];
            $deces = $_POST['deces'];
            $guerie = $_POST['guerie'];
           

             $sql = "UPDATE static_mond SET id=(1),cas=('$cas'), deces=('$deces'), guerie=('$guerie') WHERE id=1";
             
            
            if (mysqli_query($conn, $sql)) {
              
                ?>
                <div class="alert alert-success">
                <strong>Succes!</strong> Donnees enregistrees
                </div>
                <?php
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                ?>
                <div class="alert alert-danger">
                <strong>Erreur!</strong> Veuillez contacter l'admin
                </div>
                <?php
            }

           
        }




?>

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

<form class="form-horizontal" role="form" method="POST" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="cas">Cas:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cas"  placeholder="Enter cas">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="deces">Deces:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deces" placeholder="Enter deces">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="guerie">Guerie:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="guerie" placeholder="Enter guerie">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>




  
<footer class="container-fluid text-center">
    <div style="font-size: 15px;" class="text-center"> Copyright 2020    SC-19.netlify.app</div>
</footer>
<?php
$conn->close();
?>
</body>


</html>

