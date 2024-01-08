<?php 
    include 'conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM personel WHERE personel_id=$id");
        
        $stmt -> execute();

    }
    header('location:personel.php');
?>