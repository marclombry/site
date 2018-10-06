<?php include("partials/nav.view.php");?>
<form method="post" action="">
<?php
	echo '<p>'.Form::input('text','pseudo','Pseudo').'</p>';
	echo '<p>'.Form::input('text','email','Email').'</p>';
	echo '<p>'.Form::input('text','password','Password').'</p>';
	echo '<p>'.Form::input('text','secret','Secret').'</p>';
	echo '<p><input type="hidden" id="token" name="token" value="ddd"></p>';
	echo '<input type="submit" value ="se connecter" name="connecte" id="connecte">';

?>
</form>
<?php include("partials/footer.view.php");?>