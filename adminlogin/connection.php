<?php 
$db = new mysqli('localhost','root','Rootroot','wms');
if(!$db) {
    die('Please check Your database connection'.mysqli_error($db));
}

?>