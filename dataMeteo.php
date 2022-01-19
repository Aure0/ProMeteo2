<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style2.css">

<head>

         <meta charset="utf-8">
       <title> Affichage de données meteo </title>

       <link rel="stylesheet" href="styles/style.css">

  </head>

<body>

<?php // Ouverture du fichier contenant les données

       $FValeur = fopen("data/data.txt","r");

?>

       <h2> Données météo </h2>

                    <p>La température est de

                       <?php
                                  $Temp = fgets($FValeur,10); // Lecture première valeur
                                  echo "$Temp";
                       ?>

                    °C</p>


                       <?php
                                  $Lum = fgets($FValeur,10); //Lecture deuxième valeur
                       ?>


                    <p>Le taux d'humidité est de

                      <?php
                                       $Hum = fgets($FValeur,10); // Lecture troisième valeur
                                       echo "$Hum";
                      ?>

                    % </p>


 <?php // Fermeture du fichier contenant les donnèes

       fclose($FValeur);

?>

</body>

</html>
