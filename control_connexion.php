<?php

session_start();
include_once("header_cli.php");

function bdd()
{
return $db = new PDO('mysql:host=localhost;dbname=tp_php','root','');
}

function connexion($bdd,$nom,$prenom)
{

$req = $bdd->prepare("SELECT COUNT(*) AS nb FROM validation WHERE nom = :nom AND prenom = :prenom");
$req->execute(array("nom"=>$nom,"prenom"=>$prenom));

$donne = $req->fetch();

	if($donne['nb'] == 1)
	{
		return true;
	}
	else
	{
		return false;
	}

}

function id_user($bdd,$nom,$prenom)
{

$req = $bdd->prepare("SELECT ID FROM validation WHERE nom = :nom AND prenom = :prenom");
$req->execute(array("nom"=>$nom,"prenom"=>$prenom));

$donne = $req->fetch();

	return $donne['ID'];
}

$bdd = bdd();

if(isset($_POST['nom']) AND isset($_POST['prenom']))
{
	if(connexion($bdd,$_POST['nom'],$_POST['prenom']))
	{
		$_SESSION['id'] = id_user($bdd,$_POST['nom'],$_POST['prenom']);
		
		if(isset($_POST['souvenir']))
		{
			setcookie("id_user",$_SESSION['id'],time()+60*60*24*30);
		}

	}
	else
	{
		require_once("erreur_connexion.php");
	}
}
else if(isset($_GET['deco']))
{
	session_destroy();
	setcookie('id_user');
 
	unset($_COOKIE['id_user']);
	require_once("acces_compte.php");
}
else if(isset($_SESSION['id'])) 
{
	
}
else if(isset($_COOKIE['id_user']))
{
		if(control_cookie($bdd,$_COOKIE['id_user']))
		{
		$_SESSION['id'] = $_COOKIE['id_user'];	
		
		}
}
?>
<div id="content">
	<div class="box">
		<div class="title">Bienvenue sur votre espace personnel IT Bank !</div>
		<div class="content">
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque corrupti praesentium, vero commodi eum hic voluptas beatae ipsum tempore itaque pariatur! Laborum aliquam quos molestias vel, sapiente pariatur, sequi facere.</p>
		</div>
	</div>
</div>


<?php
include_once("footer.php");
?>