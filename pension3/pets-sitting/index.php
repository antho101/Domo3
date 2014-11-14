<!doctype html>
<?php
include ('./lib/php/Pliste_include.php');
$db = Connexion::getInstance($dsn,$user,$pass);
session_start();
?>
<html>
    <head>
        <title>Pets-Sitting - Bienvenue</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="../admin/lib/css/style_pc.css" />
        <link rel="stylesheet" type="text/css" href="../admin/lib/css/mediaqueries.css" />
    </head>
<body>
    <section id="page">
        <header>
            <img src="../admin/images/banniereFE.jpg" alt="Pets-Sitting" />
        </header>
        <section id="colGauche">
            <nav>
                <?php
                if(file_exists('./lib/php/Pmenu.php')){
                    include ('./lib/php/Pmenu.php');
                }                
                ?>
            </nav>
        </section>
        <section id="contenu">
            <div id="main">
                <?php
  //quand on arrive sur le site 
  if(!isset($_SESSION['page'])) {
      $_SESSION['page']="accueil";
  }  //si on a cliqué sur un lien du menu
  if(isset($_GET['page'])) {
      $_SESSION['page']=$_GET['page'];
  }
  $_SESSION['page']=$_SESSION['page'];
  if(file_exists('./pages/'.$_SESSION['page'].'.php')){
      include ('./pages/'.$_SESSION['page'].'.php');
  }               
                ?>
            </div>
        </section>
        
    </section> 
    <footer>
        Editeur responsable felix@petssitting.com
    </footer>
</body>
    
</html>