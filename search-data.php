<?php 
	include("Database.php");
	Database::connect("localhost","root","","zaklady");

	if (isset($_POST['nazev'])) {
		$sql = "SELECT * FROM filmy JOIN zanry ON filmy.idzanr = zanry.idzanr WHERE filmy.nazev LIKE ?";
		$parameteres = array("%".$_POST['nazev']."%");
		if ($filmy = Database::queryArray($sql,$parameteres)) {	
			echo json_encode($filmy);
		}
	}
?>