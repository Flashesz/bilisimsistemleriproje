<?php 
    include 'conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM hizmetler WHERE hizmet_id=$id");
        
        $stmt -> execute();

    }
    header('location:hizmet.php');
?>