<?php
function connessione(): PDO|string
{
    $ConnDetails = new stdClass();
    $ConnDetails->host = "localhost";
    $ConnDetails->username = "root";
    $ConnDetails->password = "root";
    $ConnDetails->database = "form";
    $ConnDetails->commPort = "3306";
    $ConnDetails->options = [];

    try {

        $db = new PDO("mysql: host=$ConnDetails->host; dbname=$ConnDetails->database",
            $ConnDetails->username,
            $ConnDetails->password,
            $ConnDetails->options);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

    }catch (PDOException $exception){
        return "connection error: ".$exception->getMessage();
    }

}

function addToForm(PDO $db, object $data): void{
$query= "INSERT INTO form1 (Nome, Cognome, Societa, Qualifica, Email, Telefono, Data_di_Nascita,Ima) 
 VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$dati = $data;

$statement = $db->prepare($query);
$statement->execute([$dati->Nome, $dati->Cognome, $dati->Societa, $dati->Qualifica, $dati->Email, $dati->Telefono, $dati->Data_di_Nascita,  $dati->imageName]);
$statement= null;
}
