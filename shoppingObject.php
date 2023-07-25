<?php
session_start();
$id=$_GET["id"];
$productA=$_SESSION["pd"];
foreach ($productA as $det) {
    if (in_array($id,$det)){
        echo $id;
    }
};
//echo $id;
?>