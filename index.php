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
            <td> <a href="#"><button type="button" class="btn btn-success">Edit</button></a></td>
            <td> <a href="#"><button type="button" class="btn btn-danger">Delete</button></a></td>

          </tr><?php
        } ?>


      </tbody>
    </table>
  </body>
</html>
