
<!DOCTYPE html>
<html lang =eng>
    <head>
        <meta charset="UTF-8">
        <title>loggué France</title>
        <link rel="stylesheet" static href="./style.css" >

    </head>
    <body>
	        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "enveloppe")
    {
    ?>
        <div class="overlay"></div>
        <div class="scanline"></div>
        <div class="wrapper">	
            <div class="content clearfix">
                
                <header class="site clearfix">
                <div class="col one">
                    <img src="logo_simplon.png" alt="Simplon Industries" width="740" height="729" id="logo-v" />
                </div>
                    <div class="col two">
                        <h4>Simplon Industries (tm) <br /> <b>F</b>ormation <b>D</b>eveloppeur data <b>A</b>teliers <b>C</b>1 <b>C</b>5</h4>
                        <p>----------------------------------------</p>
                        <p>Etablissement de la connection...</p>
                    </div>
                </header>
                <div>
                    <p>
                        Félicitation agent. Vous avez accompli la première étape pour vous connecter à votre espace de traduction personnelle. Maintenant il vous faut démontrer que vous avez les compétences adéquates pour la mission qui vous à été confiée. Pour se faire nous vous avons préparé un test de compétences pour être sûr que vous saurez quoi faire avec les données que nous avons réussi à recueillir. Bonne chance agent.  
                        
                    </p>
                    <br>
                    <p> Veuillez remplir ce questionnaire :
                        <a href="https://forms.gle/r8siynuyZ6X7qowk9" onclick="open('https://forms.gle/r8siynuyZ6X7qowk9' , 'Popup', 'scrollbars=1,resizable=1,height=560,width=770'); return false;">ici</a>
                    </p>
                		<div class="container">
<center> </br>
        <p>CODE :</p>
        <form action="3QRcode.php" method="post">
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
		
		


    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect, revenez en arrière...</p>';
    }
    ?>
    </body>




</html>