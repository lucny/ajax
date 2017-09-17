<?php 
	include("Database.php");
	Database::connect("localhost","root","","zaklady");

	if (isset($_POST['id'])) {
		$sql = "UPDATE filmy SET hodnoceni=? WHERE filmy.idfilmy=?";
		$parameteres = array($_POST['hodnoceni'], $_POST['id']);
		if (Database::query($sql,$parameteres)) {	
			$sql = "SELECT * FROM filmy JOIN zanry ON filmy.idzanr = zanry.idzanr WHERE filmy.idfilmy=?";
			$parameteres = array($_POST['id']);
			echo json_encode(Database::query($sql,$parameteres)->fetchObject());
		}
	}
?>