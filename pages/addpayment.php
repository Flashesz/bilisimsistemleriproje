<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
        $image = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];  
        $folder = "../assets/img/".$image;
        
        if(move_uploaded_file($tempname,$folder)){
            echo 'images est uplade';
        }

        $Name = $_POST['kullanici_name'];
        $odemeTarih = $_POST['odeme_tarihi'];
        $faturaNumara = $_POST['fatura_numarasi'];
        $odenenTutar = $_POST['odenen_tutar'];
        $toplamTutar= $_POST['toplam_tutar'];  
        $islemTarih= $_POST['islem_tarihi'];
       

        $requete = $con->prepare("INSERT INTO odeme(kullanici_name,odeme_tarihi,fatura_numarasi,odenen_tutar,toplam_tutar,islem_tarihi) VALUES('$Name','$odemeTarih','$faturaNumara','$odenenTutar','$toplamTutar','$islemTarih')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:payment_details.php')
    ?>