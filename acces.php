<?php

       if (($_GET["login"] == "utilisateur") && ($_GET["motpasse"] == "1234"))

               {

                       header('Location: dataMeteo.php');

               }

       else

                        header('Location: erreur.php');

        if (($_GET["login"] == "admin") && ($_GET["motpasse"] == "4321"))

              {
                        header('Location: admin.php?temperature=14&humidite=14');

              }

        else

                        header('Location: erreur.php');

?>
