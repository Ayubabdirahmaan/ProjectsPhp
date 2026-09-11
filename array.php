<?php
    $people= array(
        array("Ahmed", "6564664", "madina"),
        array("salah", "4884", "karan"),
        array("sharnka", "232222", "hodan")
    )
?>
<table>
    <thead>
        <tr><th>Name</th><th>phone</th><th>Address</th></tr>
    </thead>
    <tbody>
        <?php foreach($people as $key => $row): ?>
            <tr>
                <?php foreach($row as $key => $value[0]): ?>
                    <td>
                        <?php echo $value[0]; ?>
                    </td>
                    <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
