<?php
    $arr = array(
        'name'     => $_GET['name'],
        'massage'    => $_GET['massage']); 
    $json_string = json_encode($arr);
    echo $json_string;

?>
