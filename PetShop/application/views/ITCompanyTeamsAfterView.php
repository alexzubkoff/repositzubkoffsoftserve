<h1 style="color:blue;">All teams after</h1>
<tr>
    <th>Type</th>
    <th>Team's name</th> 
    <th>Project</th>
    <th>Team's members</th>
    <th>Team's needs</th>
    
  </tr>


<?php foreach($data as $team): ?>
            <tr>
                <td>
                    <?= $team['type']?>
                    </td>  
            <td>
                    <?= $team['name']?>
                    </td>
            <td>
                    <?= $team['project']?>
                    </td> 
             <td>
                    <?= $team['teammembers']?>
                    </td> 
            <td>
                    <?= $team['needs']?>
                    </td> 
                    
                </tr>
                
                <?php endforeach; ?>
