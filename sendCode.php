<?php
require_once('CustomData.php');
$dat= new CustomData();

if(isset($_REQUEST['dataa'])){
    $data = $_REQUEST['dataa'];
} else {
    $data = 0;
}

echo $dat->returnData($data);
?>
