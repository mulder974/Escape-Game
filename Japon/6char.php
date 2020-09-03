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
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "Xm7ys56FxwD")
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
Belle maitrise du simulateur, beau travail !</br>
Abordons maintenant votre mission principale, nous avons reçu une nouvelle base de données de la part des aliens.</br>
Votre objectif est de déchiffrer leur message.</br></br>

Dans la première base de données obtenue précédemment vous trouverez les données pour décrypter l'alien mais attention, on sait que les aliens utilisent 3 langues différentes.</br>
On sait également que cette première base de données comporte des données dupliquées, perdues et mélangées. </br>
D'ailleur en parlant de cette première base de données, il n'y en a pas qu'une seule mais 5 différentes envoyées chaqunes aux 5 pays concernées.</br></br>

La deuxième base de donnée mise à votre disposition ci-dessous comporte d'étranges textes en aliens, à vous de les décrypter !</br></br>

Pour mener à bien votre mission, la coopération entre les 5 pays est INDISPENSSABLE !</br>
Bonne chance.
</br></br>
                    </p>
                        <br>

                     <p>
                        Bienvenue sur la page de stockage de notre base de données. Dans celle-ci vous trouverez toutes les informations que nous avons réussies à réunir jusqu'à présent. Grâce à elle vous devez réussir à traduire le texte mystérieux que nous avons reçu. 
                   </p>
                   <br>
                   <img src="http://www.jonveit.com/img/database-logo.png" alt="logos base de données" width="100" height="100" style="float: left;">
                   <a href="db_char.sqlite3"
				   download="db_char">
                        <br>
                        Telecharger la db
                    </a>
					
					
                        <br>                    
                    </ul>
					
					
				
		<div class="container">
		<center> </br>
        <p>CODE :</p>
        <form action="7form.php" method="post">
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