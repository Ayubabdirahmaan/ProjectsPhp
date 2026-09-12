<?php
// $people= array(
//     array("Ahmed", "6564664", "madina"),
//     array("salah", "4884", "karan"),
//     array("sharnka", "232222", "hodan")
// )
$db=new mysqli('localhost', 'root', '', 'ifis1');
$sql='select * from jobs';
$result=$db->query($sql);
$cols=$result->fetch_fields();
// echo $cols;
?>
<table>
    <thead>
        <tr>
            <?php foreach ($cols as $key => $value) : ?>
                <th><?php echo $value->name ?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $key => $row): ?>
            <tr>
                <?php foreach ($row as $key => $value): ?>
                    <td>
                        <?php echo $value; ?>
                    </td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>