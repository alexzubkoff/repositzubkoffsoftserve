<h1 style="color:blue;">Cats white and fluffy</h1>
<p>
    <?php
    $data = explode(';', $data);
    $newarr = array_splice($data, count($data) / 2);
    foreach ($newarr as $pet) {
        echo $pet;
    }
    ?>
</p>