<?php

$server = "sql100.epizy.com";
$username ="epiz_29514514";
$password ="Swye7a91lIHZ";
$dbname ="epiz_29514514_DataForBusiness";

$mysqli = new mysqli('database-dfb-mysql.cysbopuofpuh.eu-west-2.rds.amazonaws.com:3306', 'admin', 'Shido1710', 'DataForBusiness');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

$UK = $_POST['UK'];
$ITA = $_POST['ITA'];

$toinsert = "INSERT INTO Balance
			VALUES
			(sysdate(),'$UK',
			'$ITA')";

$result = mysqli_query($mysqli,$toinsert);	//order executes
if($result){
	echo("<br>Inserimento avvenuto correttamente");
} else{
	echo("<br>Inserimento non eseguito");
}
?>