<?php 
    include 'conixion.php';
    $id = $_GET['Id'];

    if(isset($id)){
        $stmt = $con ->prepare("DELETE FROM odeme WHERE odeme_id=$id");
        
        $stmt -> execute();

    }
    header('location:payment_details.php');
?>