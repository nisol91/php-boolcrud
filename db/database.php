<?php

//connessione al server tramite php plain (non viene piu utilizzata e non va capita troppo a fondo)
$servername = 'localhost';
$username = 'root';
$password = 'asd';
$dbname = 'hotel_booleana';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
echo ( 'Connection failed: ' . $conn->connect_error);
} else {
  // echo 'Siamo dentro';
}


//ora la query sql
$sql = 'SELECT prenotazioni_has_ospiti.id, prenotazione_id, ospite_id, name, lastname, date_of_birth
FROM `prenotazioni_has_ospiti`
JOIN ospiti
ON ospiti.id = prenotazioni_has_ospiti.ospite_id;';

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row


//questa parte e' quella importante, ovvero creo il mio array che voglio passare dal database,
//in questo caso $ospiti, e ci aggiungo le varie row della tabella ottenuta dalla query $sql.
$ospiti = [];
  while($row = $result->fetch_assoc()) {
    $ospiti[] = $row;
  }
//-----------
} else {
  echo '0 results';
}

// var_dump($ospiti);die();



$conn->close();


?>
