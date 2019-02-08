<?php

//connessione al server tramite php plain (non viene piu utilizzata e non va capita troppo a fondo)
include '../credentials/env.php';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
echo ( 'Connection failed: ' . $conn->connect_error);
} else {
  // echo 'Siamo dentro';
}

//-----ora posto i valori presi dal form tramite il valore name="" degli input.
$nome = $_POST['new_name'];
$cognome = $_POST['new_lastname'];
$nascita = $_POST['new_birth'];
$tipo_doc = $_POST['new_type_doc'];
$numero_doc = $_POST['new_doc'];

$sql = "INSERT INTO `ospiti` (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`)
VALUES ('$nome', '$cognome', '$nascita', '$tipo_doc', '$numero_doc');";

$result = $conn->query($sql);

//-------********IMPORTANTE questa parte e' diversa nella post rispetto alla get!!!
if ($result == true) {
  echo 'ok, host added to db';
//-----------
} else {
  echo '0 results';
}

// var_dump($ospiti);die();



$conn->close();


?>
