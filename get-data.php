<?php 
	include("Database.php");
	Database::connect("localhost","root","","zaklady");

	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM filmy JOIN zanry ON filmy.idzanr = zanry.idzanr WHERE filmy.idfilmy=?";
		$parameteres = array($_GET['id']);
		if ($film = Database::query($sql,$parameteres)->fetchObject()) {	
			//echo '{"nazev":"'.htmlspecialchars($film->nazev).'", "obsah":"'.htmlspecialchars($film->obsah).'"}';
			echo json_encode($film);
		}
	}
?>