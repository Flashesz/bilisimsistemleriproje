<?php
session_start();
$id = $_SESSION['personel_id'];
include 'conixion.php';
if (isset($_POST['submit'])){
        $Name = $_POST['personel_name'];
        $bilgi = $_POST['personel_bilgi'];
        $maas = $_POST['personel_maas'];
        $hizmet = $_POST['verdigihizmet'];
        
        
    $requete = $con -> prepare("UPDATE personel 
    SET 
    personel_name = '$Name',
    personel_bilgi = '$bilgi',
    personel_maas = '$maas',
    verdigihizmet = '$hizmet'
    
    
    WHERE personel_id = $id");
    $res = $requete -> execute();
    header("location:personel.php");
}
?>