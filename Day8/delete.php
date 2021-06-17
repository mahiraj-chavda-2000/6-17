<?php
    require('connect.php');
    // print_r($_POST);
  $id=$_POST['id'][0];
    $sql = "DELETE FROM `MyTable` WHERE `MyTable`.`id` = $id";
    mysqli_query($conn,$sql);
    echo $sql;

?>