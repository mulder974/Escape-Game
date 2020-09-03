<!DOCTYPE html>
<html lang =eng>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./style.css">
        <script src="./script.js"></script>
    </head>
    <body>
	        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "fD87F")
    {
    ?>
        <div class="overlay"></div>
        <div class="scanline"></div>
        <div class="wrapper">	
            <div class="content clearfix">
                
                <header class="site clearfix">
                <div class="col one">
                    <img src="logo_simplon.png" alt="591 Industries" width="740" height="729" id="logo-v" />
                </div>
                    <div class="col two">
                        <h4>Simplon Industries (tm) <br /> <b>F</b>ormation <b>D</b>eveloppeur data <b>A</b>teliers <b>C</b>1 <b>C</b>5</h4>
                        <p>----------------------------------------</p>
                        <p>Etablissement de la connection...</p>
                    </div>
                </header>
                <p class="clear"><br /></p>
                <div>
                    <p>
Sachez que si vous n'êtes pas à la hauteur pour décrypter ce message, ce sera peut-être la fin du monde tel que nous le connaissons !</br>
C'est pour cette raison que nous exigeons de vous tester sur un simulateur de défense spatial, nous devons être préparés au pire.</br>
Piloter un satellite militaire et repoussez l'invasion extraterrestre en atteignant un score de 5.000 (ou plus) puis vous recevrez votre code pour passer à l'étape suivante.</br></br>
                    </p>
                        <br>
         <center> <FORM ACTION="game.html" TARGET="_blank">
    <INPUT TYPE="SUBMIT" VALUE="LANCER LE SIMULATEUR">
  </FORM></center>
                        <br>                    
                    </ul>
					
		
		<div class="container">
		<center> </br>
        <p>CODE :</p>
        <form action="6char.php" method="post">
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