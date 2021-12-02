<?php
  require_once "connection.php";
 
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM songs WHERE song_name LIKE '{$_POST['query']}%' LIMIT 1000";
      $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
        echo $res['song_name']. "<br/>";
      }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Song not found
      </div>
      ";
    }
  }
?>