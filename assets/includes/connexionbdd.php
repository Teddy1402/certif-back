<?php

try{
	
	$db=new PDO('mysql:host=localhost;dbname=certif;charset=utf8','root','');
	
	

} catch(PDOException $e){
	die('Erreur:'.$e->getMessage());
}

?>	