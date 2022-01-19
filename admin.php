<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style2.css">

<?php // Ouverture du fichier contenant les données

       $FValeur = fopen("data/data.txt","r");

?>

<html>
      <header>
        <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
      </header>

      <title>ProMétéo&#174;</title>

      <body>

<!-- *******************************************Le topnav ne sert à rien, mais ça fait vide sans.******************************************* -->

        <div class="topnav">
          <a class="active" href="#home">Accueil</a>
          <a href="#news">News</a>
          <a href="#contact">Contact</a>
        </div>

        <div class="main">

<!-- *******************************************Affichage de la date et de l'heure******************************************* -->

        <div class="hellotext" onload=display_ct();>
          <h1>Bienvenue sur ProMétéo&#174;</h1>
          <p>Nous sommes le <span id='ct' ></span> et il est actuellement <span id='cd' ></span></p><br>
        </div>

        <script type="text/javascript">
        function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
          var x = new Date()
          var x1=x.getDate() + "/" + x.getMonth() + 1+ "/" + x.getFullYear();
          var x2=x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
          document.getElementById('ct').innerHTML = x1;
          document.getElementById('cd').innerHTML = x2;
        display_c();
         }
        </script>


          <body onload=display_ct();>
          <span id='ct'></span>


<!--*******************************************Formulaire du changement de valeurs météo*******************************************-->

<form method="get" clas="newmeteo">

<div class='box2'>
  <div class='box-form'>
    <div class='box-login-tab'></div>

    <div class='box-login-title'>
      <div class='i i-login'></div><h2>Changer les informations météo</h2>
    </div>

    <div class='box-login'>

      <div class='fieldset-body' id='login_form'>
        	<p class='field'>
          <label for='user'>Température</label>
          <input required input type="text" placeholder="Température" name="temperature" size="20"/>
        </p>

      	  <p class='field'>
          <label for='pass'>Taux d'humidité</label>
          <input required input type="text" name="humidite" size="20" title='Mot de passe' placeholder="Taux d'humidité" />
        </p>

        	<input input type="submit" class="connexionbutton" value="Valider" />
      </div>
    </div>
  </div>
</div>
</form>


<?php

$meteo = ($_GET["temperature"]);
$humidite = ($_GET["humidite"]);
$Ftexte = fopen("data/data.txt","w");
fwrite($Ftexte, $meteo . "\n");
fwrite($Ftexte, "1" . "\n");
fwrite($Ftexte, $humidite . "\n");
fclose($Ftexte);
//$_GET("meteo")&&$_GET("humidite");
?>

<!--*******************************************Formulaire d'ajout d'un nouvel utilisateur'*******************************************-->
<!--*******************************************NON-FONCTIONNEL POUR L'INSTANT*******************************************-->

<form method="get">

<div class='box1'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>Ajouter un utilisateur</h2>
    </div>
    <div class='box-login'>
      <div class='fieldset-body' id='login_form'>
        	<p class='field'>
          <label for='user'>Nom d'utilisateur</label>
          <input input type="text" name="new_user" size="20" title="Nom d'utilisateur"/>
          <span id='valida' class='i i-warning'></span>
        </p>
      	  <p class='field'>
          <label for='pass'>Mot de passe</label>
          <input input type="password" name="motpasse" size="20" title='Mot de passe' />
          <span id='valida' class='i i-close'></span>
        </p>


        	<input input type="submit" class="connexionbutton" name="EnvValeur" value="Connexion" />
      </div>
    </div>
  </div>
</div>

</form>

<!--*******************************************Affichage des valeurs météo*******************************************-->

<p class="infos">La température est de

  <strong>
   <?php
      $Temp = fgets($FValeur,10); // Lecture première valeur
      echo "$Temp";
   ?>
 </strong>

°C

<?php
           $Lum = fgets($FValeur,10); //Lecture deuxième valeur
?>

<!-- Il y avait ici le soleil, mais nous avons décidé de ne pas l'ajouter. -->

<br>

Le taux d'humidité est de

  <strong>
    <?php
      $Hum = fgets($FValeur,10); // Lecture troisième valeur
      echo "$Hum";
    ?>
</strong>

%

</p>


      <footer id="footer">

          <h2> Retrouvez nous sur les réseaux sociaux !</h2>


          <a href="http://www.twitter.com" target="blank">
            <img class="logo" src="./icones/twitter.svg" hspace=25 height=50px/></a>

          <a href="http://www.youtube.com" target="blank">
            <img class="logo" src="./icones/youtube.svg" hspace=25 height=50px/></a>

          <a href="http://www.discord.com" target="blank">
            <img class="logo" src="./icones/discord.svg" hspace=25 height=50px/></a>

          <a href="http://www.github.com" target="blank">
            <img class="logo" src="./icones/github.svg" hspace=25 height=50px/></a>

          <a href="http://www.instagram.com" target="blank">
            <img class="logo" src="./icones/instagram.svg" hspace=25 height=50px/></a>

          <a href="http://www.reddit.com" target="blank">
            <img class="logo" src="./icones/reddit.svg" hspace=25 height=50px/></a>

          <a href="http://www.twitch.tv" target="blank">
            <img class="logo" src="./icones/twitch.svg" hspace=25 height=50px/></a>

          <p style="font-size: 15px;">© 2021 Aurélien VEILLET - Tous droits réservés.</p>

      </footer>
