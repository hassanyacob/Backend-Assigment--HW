<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'name'     => $_POST['name'],
        'massage'    => $_POST['massage'],
        
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}
?>
