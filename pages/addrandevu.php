<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
        

        $Name = $_POST['musteri_username'];
        $Email = $_POST['musteri_mail'];
        $Phone = $_POST['musteri_phonenumber'];
        $services = $_POST['hizmet_adi'];
        $time = $_POST['randevu_zaman'];
        $date = $_POST['randevu_tarih'];
        $tercih= $post['personel_adi'];
        $message = $_POST['musteri_mesaj'];

        $requete = $con->prepare("INSERT INTO randevu(musteri_username,musteri_mail,musteri_phonenumber,hizmet_adi,randevu_zaman,randevu_tarih,personel_adi,musteri_mesaj) VALUES('$Name','$Email','$Phone','$services','$time','$date','$tercih','$message')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:randevu.php')
    ?>