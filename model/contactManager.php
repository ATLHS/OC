<?php  

class contactManager {
	public function sendMessage () {
		$bdd = $this->bddConnexion();
		$saveMessage = $bdd->prepare("INSERT INTO contact_message (firstname, lastname, email, 	message) VALUES (?,?,?,?)");
		$saveMessage->execute(array($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["message"] ));
	}

	private function bddConnexion () {
		$bdd = new PDO("mysql:host=localhost;dbname=jean_forteroche;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		//$bdd = new PDO ("mysql:host=sofianewdmmila.mysql.db;dbname=sofianewdmmila;charset=utf8", "sofianewdmmila", "AttilAh44");
		return $bdd;
	}

}
?>