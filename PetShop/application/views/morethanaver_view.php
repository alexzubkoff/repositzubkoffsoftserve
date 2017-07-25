<h1 style="color:blue;">More than average price pets</h1>
<p>
    <?php
    $data = explode(";", $data);
    $data = array_splice($data, count($data) / 2);
    foreach ($data as $pet) {
        echo $pet;
    }
    /*
      foreach ($data as $key => $value) {

      echo '<tr><td>' . $value['pet_id'] . "</td><td>" . $value['type'] . '</td><td>' . $value['name'] . '</td><td>' . $value['color'] . '</td><td>' . $value['price'] . '</td><td>' . $value['fluffiness'] . "</td></tr>";
      } */
    ?>
</p>
