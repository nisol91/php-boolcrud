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

//-----****POST e DELETE sono molto simili, cambia solo la query sql
$id_delete = $_POST['iddd_show_input'];
//IMPORTANTISSIMO: cosi come nel create, per passare valori degli input dal form a qui, li riconosco tramite il
//name="" degli input!!(che deve essere uguale al for="", se e' presente una label )
//(in questo caso il mio name e' 'iddd_show_input')

$sql = "DELETE FROM `ospiti` WHERE id = '$id_delete';";

$result = $conn->query($sql);

//-------********IMPORTANTE questa parte e' diversa nella post rispetto alla get!!!
if ($result == true) {
  echo 'ok, selected host deleted from db';
//-----------
} else {
  echo '0 results';
}

// var_dump($ospiti);die();



$conn->close();


?>
