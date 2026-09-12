<?php
$db=new mysqli('localhost', 'root', '', 'ifis1');
$title=$_REQUEST['txt1'];
$salary=$_REQUEST['txt2'];
$sql="insert into jobs values(null,'$title','$salary')";
$r=$db->query($sql);
   echo $r==1? 'operation is done successfull' : 'failed';
?>