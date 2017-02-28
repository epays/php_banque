<?php
include_once("header.php");
?>

<div id="content" class="virement">
	<div class="box">
		<div class="title">Effectuez un virement via le formulaire ci-dessous.<br /></div>
		<div class="content">
<form method="post" action="">
<label>Nom destinataire: <input type="text" name="nom" required/></label><br/>
<label>Prénom destinataire: <input type="text" name="prenom" required/></label><br/>
<label>Montant: <input type="number_format" name="montant" required/></label><br/>
<input type="submit" value="Transferer"/>
</form>
		</div>
	</div>
</div>


<?php
include_once("footer.php");
?>