<!-- Ce code a été écrit par Julie Meunier dans le cadre d'un stage au Lycée Livet
Pour me contacter en cas de besoin : julie_meunier44@yahoo.fr -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<!-- Intégration de la page "header"-->
	<?php
 		include 'header.php';
 	?>
	<body>
		<div id="global">
			<!-- Intégration de la page "menu"-->
			<?php
 				include 'menu.php';
 			?>

			<div id="contenu">
				
				<?php
 					include 'suppression_imprimante.php';
 					include 'suppression_marque.php';
					include 'suppression_modele.php';
					include 'suppression_type.php';
					include 'suppression_format.php';
 				?>
			</div><!-- #contenu -->

			<p id="copyright">
				Développé par Julie Meunier &copy; 2014<br />
				Mise en page &copy; 2008
				<a href="http://www.elephorm.com">Elephorm</a> et
				<a href="http://www.alsacreations.com">Alsacréations</a>
			</p>

		</div><!-- #global -->
		
	</body>
</html>

