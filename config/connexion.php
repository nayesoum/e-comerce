<?php 
// ici on va creer notre connexion a la base de donnée et le header et footer
// ici essaie de te connecter 
try{
	//connexion bdd
	$bdd = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','root','');
	//echo 'connexion OK';
}catch(Exception $e){
	//si tu y arrive pas recupere le message et affiche le
		die('Erreur : '.$e->getMessage());
}
?>

