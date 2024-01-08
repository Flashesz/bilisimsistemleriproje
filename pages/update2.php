<?php
session_start();
$id = $_SESSION['odeme_id'];
include 'conixion.php';
if (isset($_POST['submit'])){
        $Name = $_POST['kullanici_name'];
        $odeme = $_POST['odeme_tarihi'];
        $tutar = $_POST['odenen_tutar'];
        $toplam = $_POST['toplam_tutar'];
        $islem = $_POST['islem_tarihi'];
        
    $requete = $con -> prepare("UPDATE odeme 
    SET 
    kullanici_name = '$Name',
    odeme_tarihi = '$odeme',
    odenen_tutar = '$tutar',
    toplam_tutar = '$toplam',
    islem_tarihi = '$islem'
    
    
    WHERE odeme_id = $id");
    $res = $requete -> execute();
    header("location:payment_details.php");
}
?>