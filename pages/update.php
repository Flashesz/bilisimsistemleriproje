<?php
session_start();
$id = $_SESSION['randevu_id'];
include 'conixion.php';
if (isset($_POST['submit'])){
        $Name = $_POST['musteri_username'];
        $Email = $_POST['musteri_mail'];
        $Phone = $_POST['musteri_phonenumber'];
        $services = $_POST['hizmet_adi'];
        $time = $_POST['randevu_zaman'];
        $date = $_POST['randevu_tarih'];
        $tercih= $_POST ['personel_adi'];
        $message = $_POST['musteri_mesaj'];
    $requete = $con -> prepare("UPDATE randevu 
    SET 
    musteri_username = '$Name',
    musteri_mail = '$Email',
    musteri_phonenumber = '$Phone',
    hizmet_adi = '$services',
    randevu_zaman = '$time',
    randevu_tarih = '$date',
    personel_adi= '$tercih',
    musteri_mesaj = '$message'
    
    WHERE randevu_id = $id");
    $res = $requete -> execute();
    header("location:randevu.php");
}
?>