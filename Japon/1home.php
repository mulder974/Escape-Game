
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Homepage</title>
<link rel="stylesheet" static href="./style.css" >
<!-- id: Russie 
mdp : Mon premier est seul.
Mon second est terminé.
Mon tout n'a pas de fin. -->
</head>
<body>
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "japon")
    {
    ?>
<!-- partial:index.partial.html -->
<div class="overlay"></div>
	<div class="scanline"></div>
<div class="wrapper">	
<div class="content clearfix">
		
		<header class="site clearfix">
		<div class="col one">
			<img  src="logo_simplon.png" alt="Simplon Industries" width="740" height="729" id="logo-v" />
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
		<!-- Groupe3 
id: Japon
mdp : Qu'elle soit rouge ,noire, ou morte elle reste bleue, qu'est ce ? -->
 
		<p>Agents Simplon,
			L'heure est grave. Ce matin à 4h30, la quasi-totalité des dirigeants de ce monde ont découvert dans leurs boites mail, un message pour le peu étrange.
			Après vérification, et retraçage de cette e-mail, aucune source connue n'a pu être identifiée.
			Les seuls indices que nous avons sont, l'adresse e-mail: amiralspaceship@gmail.com ainsi que l'objet:to all humans !
			N'ayant pu retrouver l'expéditeur de ce message, il apparait que ce dernier utilise des technologies qui nous sont inconnues, et 
			nous pensons donc à un premier contact, établi par des extraterrestres.
			Il s'agirait d'une première dans l'histoire de l'humanité.
			Le contenu de ce message est quant à lui incompréhensible, le voici : <br /><br /> 
			}]3}()}|\|}_T}()}|_|}/?}__}|-|}|_|}|\/|}/\}|}|\|},}__}[-}~|~}[-}_\~}__}\/}()}|_|}_\~}__}_\~}|_|}/=}/=}|}_\~}/\}|\/|}|\/|}[-}|\|}~|~}__}|}|\|}~|~}[-}|_}|_}|}(_,}[-}|\|}~|~}_\~}__}|^}()}|_|}/?}__}(}()}|\/|}|^}/?}[-}|\|}|)}/?}[-}__}()_}|_|}[-}__}|\|}()}|_|}_\~}__}_\~}()}|\/|}|\/|}[-}_\~}__}\/}[-}|\|}|_|}_\~}__}[-}|\|}__}|^}/\}|}><}__}?}__}_\~}|}__}~|~}[-}|_}__}[-}_\~}~|~}__}|_}[-}__}(}/\}_\~},}__}\/}()}|_|}_\~}__}|\|}__}/\}|_|}/?}[-}~/_}__}|^}/\}_\~}__}|)}[-}__}|\/|}/\}|_}__}/\}__}|)}[-}(}/?}|}|^}~|~}[-}/?}__}(}[-}__}|\/|}[-}_\~}_\~}/\}(_,}[-}__}[-}~|~}__}|^}()}|_|}/?}/?}[-}~/_}__}/?}[-}|^}()}|\|}|)}/?}[-}__}/\}__}|\|}()}~|~}/?}[-}__}()_}|_|}[-}_\~}~|~}|}()}|\|},}__}()_}|_|}[-}|_}|_}[-}__}[-}_\~}~|~}__}|_}/\}__}/?}[-}|^}()}|\|}_\~}[-}__}/\}__}|_}/\}__}(_,}/?}/\}|\|}|)}[-}__}()_}|_|}[-}_\~}~|~}|}()}|\|}__}_\~}|_|}/?}__}|_}/\}__}\/}|}[-}__}|_}__}|_|}|\|}|}\/}[-}/?}_\~}__}[-}~|~}__}|_}[-}__}/?}[-}_\~}~|~}[-}__}?
			<br /><br />
			Nous sommes façe à une menace sans précédent, et nous faisons alors appel à vous, agents Simplon. Votre mission si vous l'accepter, sera de décrypter ce message et de fournir une réponse à ces envahisseurs. Nous vous avons répartis, agents, en fonction de vos nationalités : France, Chine, Russie, US et Japon.
			
			Vous devrez travailler en coopération afin de tous nous protéger !
			<br />
			Pour le moment, tentez de vous connecter à votre espace de traduction personnel. Par soucis de confidentialité, nous ne les fournissons pas dans cette transmission, mais vos compétences en HTML et l'exploration de page devraient pouvoir vous aider <!DOCTYPE html>
			<br />
			Bonne chance, agents ! Nous comptons sur vous ...
			<br /><br />
		<!-- Groupe5
id: US
mdp : 
Je suis d'eau,
je suis d'air,
et je suis d'électricité.

Qui suis-je ?
 -->

		</p>
		<!-- 
id: France
mdp : Fais la somme de 1000 et de 40. Ajoute 1000. Ajoute 30. Ensuite ajoute encore 1000. 
Ajoute 20. De nouveau, 1000. Et encore 10. Quel est le résultat ?
 -->
<div class="container">
<center> </br>
        <p>CODE :</p>
        <form action="2logged.php" method="post">
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
<!-- partial -->
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
