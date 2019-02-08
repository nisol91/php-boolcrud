<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php
    // database
    // include 'database_create.php';

    // html
    include '../partials/_head.php';
    include '../partials/_nav.php';

    ?>
  <body>
    <h1>Aggiungi un nuovo ospite</h1>
    <form class="form-group" method="post" action="http://localhost/php_sql_crud_hotel/create/database_create.php" style="width: 50%; margin: auto;">
      <div class="form-group">
        <label for="new_name">Nome</label>
        <input type="text" class="form-control" name="new_name" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="new_lastname">Cognome</label>
        <input type="text" class="form-control" name="new_lastname" placeholder="Lastname">
      </div>
      <div class="form-group">
        <label for="new_birth">Data di nascita</label>
        <input type="text" class="form-control" name="new_birth" placeholder="Birth Date">
      </div>
      <div class="form-group">
        <label for="new_type_doc">Tipo di documento</label>
        <input type="text" class="form-control" name="new_type_doc" placeholder="Document Type">
      </div>
      <div class="form-group">
        <label for="new_doc">Numero documento</label>
        <input type="text" class="form-control" name="new_doc" placeholder="Document number">
      </div>
      <button type="submit" name="Crea" class="form-control btn btn-primary">Submit</button>
    </form>
  </body>
</html>
