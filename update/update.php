<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php
    // database
    // include 'database_ospiti_list_per_update.php';


    //invece che chiamare il file con la query che mi prende tutti i valori di ospiti, ho messo la query in un file funzioni generico.
    include '../functions/functions.php';
    $ospiti = getData();
    // html
    include '../partials/_head.php';
    include '../partials/_nav.php';

    ?>
  <body>
    <h1>Modifica ospite con id: <?php echo $_GET['id']; ?></h1>
    <form class="form-group" method="post" action="http://localhost/php_sql_crud_hotel/update/database_update.php" style="width: 50%; margin: auto;">
      <input type="hidden" name="id_update" value="<?php echo $_GET['id']; ?>">

      <?php

      foreach ($ospiti as $key => $value) {
        if ($value['id'] == $_GET['id']) {
          // var_dump($value);
          $val_nome = $value['name'];
          $val_cognome = $value['lastname'];
          $val_comple = $value['date_of_birth'];
          $val_docutype = $value['document_type'];
          $val_docunum = $value['document_number'];

        }
      }
       ?>


      <div class="form-group">
        <label for="new_name">Nome</label>
        <input type="text" class="form-control" name="new_name" placeholder="Enter name" value="<?php echo $val_nome ?>">
      </div>
      <div class="form-group">
        <label for="new_lastname">Cognome</label>
        <input type="text" class="form-control" name="new_lastname" placeholder="Lastname" value="<?php echo $val_cognome ?>">
      </div>
      <div class="form-group">
        <label for="new_birth">Data di nascita</label>
        <input type="text" class="form-control" name="new_birth" placeholder="Birth Date" value="<?php echo $val_comple ?>">
      </div>
      <!-- <div class="form-group">
        <label for="new_type_doc">Tipo di documento</label>
        <input type="text" class="form-control" name="new_type_doc" placeholder="Document Type" value="<?php echo $val_docutype ?>">
      </div> -->
      <div class="form-group">
        <label for="new_type_doc">Tipo di documento</label>
        <select class="form-control" name="new_type_doc" id="exampleFormControlSelect1">
          <option value="">Select document type</option>
          <!-- attenzione, qua ho operatore ternario per dirgli di mettermi selected ci o driver license, echo va messo prima di tutto l operatore -->
          <option value="CI" <?php echo ($val_docutype == 'CI') ? 'selected' : null; ?>>CI</option>
          <option value="Driver License" <?php echo ($val_docutype == 'Driver License') ? 'selected' : null; ?>>Driver License</option>
        </select>
      </div>
      <div class="form-group">
        <label for="new_doc">Numero documento</label>
        <input type="text" class="form-control" name="new_doc" placeholder="Document number" value="<?php echo $val_docunum ?>">
      </div>
      <button type="submit" name="Crea" class="form-control btn btn-primary">Submit</button>
    </form>
  </body>
</html>
