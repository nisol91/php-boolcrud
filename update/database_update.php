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

$my_id_update = $_POST['id_update'];


$sql = "UPDATE `ospiti`
SET `name` = '$nome', `lastname` = '$cognome', `date_of_birth` = '$nascita', `document_type` = '$tipo_doc', `document_number` = '$numero_doc'
WHERE id = '$my_id_update';";

$result = $conn->query($sql);

//-------********IMPORTANTE questa parte e' diversa nella post rispetto alla get!!!
if ($result == true) {
  echo 'ok, host updated';
//-----------
} else {
  echo '0 results';
}

// var_dump($ospiti);die();



$conn->close();


?>
