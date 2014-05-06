<?php
include_once('core/db.php');
$db = new db();
$result = $db -> execute("select * from plugins");
$size = sizeof($result);
for($i=0;$i<$size;$i++){
    $path = 'mod/'.$result[$i]['plugin'].'/index.php';
    include_once($path);
    $dummy = new $result[$i]['plugin']();
}