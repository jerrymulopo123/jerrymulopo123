<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
    <link rel=stylesheet href="style.css">
    <link rel=stylesheet href="mycss.css">
    <title>Accueil</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Accueil</title>
     <script language="javascript">

  <!--

  function right()

  {

     var msg="Vous n'etes pas auorisé à faire le clic droit";

        if((event.button==2)||(event.button==3)||(event.button==4))

                       {alert(msg);}

                    return true;

   }

        document.onmousedown=right;

  //-->

  </script>
</head>
<body>

<style>
   body{
    background:url(images/monlogo.gif);
    background-size: 100%;
   }
    h1,h2,h3,h4,h5,h6{
        color:orange;
    }
    .img{
    
    
    </style>
<div class="container">
    
    <h3 class="page-title text-center">VISITOR MANAGEMENT SYSTEM</h3>
    <form method="POST">
    
    <center>
      <style>
        body{
          margin-top: 20px;
        }
      </style>
    <a href="login.php" class="btn btn-info">
        Administrateur
    <a href="login.php" class="btn btn-success">
       Utilisateur
       <a href="tableau_archive.php" class="btn btn-primary">
          Archives
     
    </a>

  </center>
    
</div>
</form>
</div>


<?php 
if (isset($_POST['login'])) 
{
    
    header("location:login.php");

}
?>
</body>

</html>
