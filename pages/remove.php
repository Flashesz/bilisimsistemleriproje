<?php 
    include 'conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM randevu WHERE randevu_id=$id");
        
        $stmt -> execute();

    }
    header('location:randevu.php');
?>