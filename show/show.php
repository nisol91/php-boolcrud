<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php
    // database
    include 'database_show_single.php';

    // html
    include '../partials/_head.php';
    include '../partials/_nav.php';

    ?>
  <body>

    <div class="wra_p container-fluid">
      <div class="card col-4" style="width: 50%;">
        <div class="card-header">
          Dati Ospite
        </div>
        <ul class="list-group list-group-flush">
          <?php foreach ($ospiti as $key => $value) {
            if ($_GET['id'] === $value['id']) {
              ?><li class="list-group-item"><?php echo 'Id: '.$value['id']; ?></li>
              <li class="list-group-item"><?php echo 'Nome: '.$value['name']; ?></li>
              <li class="list-group-item"><?php echo 'Cognome: '.$value['lastname']; ?></li>
              <li class="list-group-item"><?php echo 'Data di nascita: '.$value['date_of_birth']; ?></li>
              <li class="list-group-item"><?php echo 'Tipo di documento: '.$value['document_type']; ?></li>
              <li class="list-group-item"><?php echo 'Numero documento: '.$value['document_number']; ?></li>
              <li class="list-group-item"><?php echo 'Creato il: '.$value['created_at']; ?></li>
              <li class="list-group-item"><?php echo 'Aggiornato il: '.$value['updated_at']; ?></li>
              <?php
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </body>
</html>
