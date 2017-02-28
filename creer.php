<?php
include_once("header.php");

$hote = 'localhost';
$port = '3306'; // MySQL default
$db = 'tp_php';
$login = 'root';
$mdp = '';

function connexion($bdd,$nom,$prenom)
{

$req = $bdd->prepare("SELECT COUNT(*) AS nb FROM validation WHERE nom = :nom AND prenom = :prenom AND email = :email");
$req->execute(array("nom"=>$nom,"prenom"=>$prenom, "email"=>$email));

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

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])){
    $nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
}

try{
$bdd = new PDO('mysql:host='.$hote.';port='.$port. ';dbname='.$db,
$login, $mdp);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
echo 'Erreur : ' . $e->getMessage() . '<br/>';
}
if (isset($nom) && isset($prenom) && isset($email))
	$req = $bdd->exec("INSERT INTO validation(nom, prenom, email) VALUES('$nom', '$prenom', '$email')")

?>

<div id="content" class="compte">
	<div class="box">
		<div class="title">Ouvrez un compte dès maintenant chez nous !<br /></div>
		<div class="content">
<form method="post" action="">
<label>Nom: <input type="text" name="nom"/></label><br/>
<label>Prénom: <input type="text" name="prenom"/></label><br/>
<label>Adresse e-mail: <input type="mail" name="email"/></label><br/>
<input type="submit" value="Valider mon inscription"/>
</form>
		</div>
	</div>
</div>

<?php
include_once("footer.php");
?>