<?php
    $arr = array(
        'name'     => $_POST['name'],
        'massage'    => $_POST['massage']); 
    $json_string = json_encode($arr);
    echo $json_string;

?>
