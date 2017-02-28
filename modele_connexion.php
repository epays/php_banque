<?
require_once("control_connexion.php");
function bdd()
{
return $db = new PDO('localhost', 'tp_php', 'root', '');;
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

function control_cookie($bdd,$id)
{
$req = $bdd->prepare("SELECT COUNT(*) AS nb FROM validation WHERE id = :id");
$req->execute(array("id"=>$id));

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