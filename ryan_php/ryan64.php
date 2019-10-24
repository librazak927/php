<?php 
$mysqli = new mysqli('localhost','root','','cy');
$mysqli->set_charset('utf8');

//a page=>10 row
$sql = "SELECT * FROM products LIMLT 10, 10";
$result = $mysqli->query($sql);

?>

<table>
    
</table>