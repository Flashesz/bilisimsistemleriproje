<?php
session_start();
$id = $_SESSION['hizmet_id'];
include 'conixion.php';
if (isset($_POST['submit'])){
        $Name = $_POST['hizmet_name'];
        $price = $_POST['hizmet_price'];
     
        
        
    $requete = $con -> prepare("UPDATE hizmetler 
    SET 
    hizmet_name = '$Name',
    hizmet_price = '$price'
   
    
    
    WHERE hizmet_id = $id");
    $res = $requete -> execute();
    header("location:hizmet.php");
}
?>