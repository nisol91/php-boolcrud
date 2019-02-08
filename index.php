<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php
// database
include 'index/database_ospiti_list.php';

// html
include 'partials/_head.php';
include 'partials/_nav.php';

?>
  <body>
    <div class="title container-fluid">
      <h2>Lista degli Ospiti</h2>
    </div>
    <div class="crea container-fluid">
      <a href="http://localhost/php_sql_crud_hotel/create/create.php"><button type="button" class="btn btn-primary" style="width: 300px">Add Host</button></a>

      <!-- cancella id selezionato -->
      <form class="" action="http://localhost/php_sql_crud_hotel/delete_selected_id/database_delete_selected.php" method="post">
        <!-- per passare l id da cancellare, lo metto direttamente nel VALUE di un input nascosto -->
        <input type="text" name="iddd_showed_input" value="<?php echo $value['id']; ?>">
        <td> <a href="#"><button type="submit" name="Cancella" class="form-control btn btn-danger">Delete Selected ID</button></a></td>
      </form>
    </div>
    <table class="table">
      <thead>
        <tr>
          <?php foreach ($ospiti[0] as $key => $value) {
          ?><th scope="col" style="width: 25%"><?php echo $key; ?></th><?php
          } ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ospiti as $key => $value) {
          ?><tr>
            <th scope="row"><?php echo $value['id']; ?></th>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['lastname']; ?></td>
            <td> <a href="http://localhost/php_sql_crud_hotel/show/show.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-primary">View</button></a></td>
            <td> <a href="http://localhost/php_sql_crud_hotel/update/update.php?id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
            <form class="" action="http://localhost/php_sql_crud_hotel/delete/database_delete.php" method="post">
              <!-- per passare l id da cancellare, lo metto direttamente nel VALUE di un input nascosto -->
              <input type="hidden" name="iddd_hidden_input" value="<?php echo $value['id']; ?>">
              <td> <a href="#"><button type="submit" name="Cancella" class="form-control btn btn-danger">Delete</button></a></td>
            </form>

          </tr><?php
        } ?>


      </tbody>
    </table>
  </body>
</html>
