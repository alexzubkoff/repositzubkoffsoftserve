<h1 style="color:blue;">Most expensive pets</h1>
<?php foreach ($data as $pet): ?>
    <tr>
        <td>
            <?= $pet['type'] ?>
        </td>  
        <td>
            <?= $pet['name'] ?>
        </td>
        <td>
            <?= $pet['color'] ?>
        </td> 
        <td>
            <?= $pet['price'] ?>
        </td>
        <td>
            <?= $pet['fluffiness'] ?>
        </td>
    </tr>

<?php endforeach; ?>