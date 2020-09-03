
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>??????????</title>
<link rel="stylesheet" static href="./style.css" >
<!-- id: Russie 
mdp : Mon premier est seul.
Mon second est terminé.
Mon tout n'a pas de fin. -->
</head>
<body>
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "DBECDAECDA")
    {
    ?>
<!-- partial:index.partial.html -->
<div class="overlay"></div>
	<div class="scanline"></div>
<div class="wrapper">	
<div class="content clearfix">
		
		<header class="site clearfix">
		<div class="col one">
			<img  src="QRCode1.png" alt="QR code" width="1000" height="989" id="logo-v" />
		</div>
			<div class="col two">
				<h4>Simplon Secret Service <br /> <b>F</b>ormation <b>D</b>eveloppeur data <b>A</b>teliers <b>C</b>1 <b>C</b>5</h4>
				<p>----------------------------------------</p>
				<p>Operation:Contact </p>
				<p>- Secret Défense -</p>
				<p>Etablissement de la connection...</p>
				
			</div>
		</header>
		<!-- Groupe1 
id: Chine
mdp : je suis un mot, Mon 1er est un "e", Mon dernier "e" et je contient une lettre -->
				

		<p class="clear"><br /></p>
		
		
		<div class="container">
		<center> </br>
        <p>CODE :</p>
        <form action="4links_us.php" method="post">
            <p>
            <input type="password" name="mot_de_passe" />
			</br></br>
            <input type="submit" value="Valider" />
            </p>
        </form>
		</center>
		</div>

	</div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://static.tumblr.com/maopbtg/oimmiw86r/jquery.autosize-min.js'></script><script  src="./script.js"></script>

    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect, revenez en arrière...</p>';
    }
    ?>
</body>
</html>
