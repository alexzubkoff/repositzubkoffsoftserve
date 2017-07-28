<h1 style="color:blue;">All candidates after</h1>
<tr>
    <th>Type</th>
    <th>Name</th> 
    <th>Wants Salary</th>
    <th>Profile</th>
    <th>Experience</th>
</tr>


<?php foreach ($data as $candidate): ?>
    <tr>
        <td>
            <?= $candidate['type'] ?>
        </td>  
        <td>
            <?= $candidate['name'] ?>
        </td>
        <td>
            <?= $candidate['wantssalary'] ?>
        </td> 
        <td>
            <?= $candidate['profile'] ?>
        </td>
        <td>
            <?= $candidate['experience'] ?>
        </td>
    </tr>

<?php endforeach; ?>

