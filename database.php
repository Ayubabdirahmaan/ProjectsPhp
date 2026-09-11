<?php
$db= new mysqli('localhost', 'root', '', 'ifis1');
$title=$_REQUEST['txt1'];
$salary=$_REQUEST['txt2'];
$sql= "insert into jobs values('$title', '$salary')";
$result=$db->query($sql);
echo $result ==1 ? 'operations is done success' : 'failed'
?>