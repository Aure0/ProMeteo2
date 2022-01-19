<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">


<html>
      <header>
        <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
      </header>

      <title>ProMétéo&#174;</title>

      <body>

        <form action="acces.php" method="GET">
        <div class="topnav">
          <a class="active" href="#home">Accueil</a>
          <a href="#news">News</a>
          <a href="#contact">Contact</a>
        </div>

        <div class="main">

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


<!--    Ici, on a le formulaire dans lequel l'utilisateur va entrer son nom d'utilisateur et son mot de passe    -->
<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>Login</h2>
    </div>
    <div class='box-login'>
      <div class='fieldset-body' id='login_form'>
        	<p class='field'>
          <label for='user'>Nom d'utilisateur</label>
          <input input type="text" name="login" size="20" title="Nom d'utilisateur"/>
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


      <footer id="footer" style="margin-top: -5000px;">

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
