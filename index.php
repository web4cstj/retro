<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Retro Jeunesse 60 - Accueil</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="retro.css"/>
</head>

<body>
<div class="interface">
<?php include('sections/entete.inc.php'); ?>
<!--DEBUT MILIEU-->
<div style="height: 380px;">
<!--DEBUT CONTENU-->
	<div class="content">
		<h1>Bienvenue sur le site Qu&eacute;b&eacute;cois</h1>
		<p>Consacr&eacute; aux ann&eacute;es r&eacute;tro, ce site propose des renseignements sur les artistes francophones du Qu&eacute;bec. Chanteurs, chanteuses, groupes des ann&eacute;es 60 et de la rel&egrave;ve. Ainsi que les artistes &eacute;trangers, hits parades, juke-box, voitures, etc.</p>
		<h3>Recherche Google</h3>
<!--DEBUT GOOGLE-->
		<form action="http://www.google.ca/search" target="_blank" method="get">
			<div><input type="text" name="q" size="64" maxlength="255" value=""/></div>
			<div>
				<input type="radio" name="as_sitesearch" value="www.retrojeunesse60.com" checked="checked"/>
				<p>Rechercher sur www.retrojeunesse60.com seulement</p>
			</div>
			<div>
				<input type="radio" name="as_sitesearch" value=""/>
				<p>Rechercher sur tout le Web</p>
			</div>
			<div><input type="hidden" name="hl" value="fr"/></div>
			<div><input type="submit" value="Rechercher"/></div>
		</form>
<!--FIN GOOGLE-->
	</div>
<!--FIN CONTENU-->
<?php include('sections/menu.inc.php'); ?>
</div> 
<!--FIN MILIEU-->
<?php include('sections/pied.inc.php'); ?>
</div>                  
</body>
</html>