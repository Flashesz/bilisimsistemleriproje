<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
        $image = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];  
        $folder = "../assets/img/".$image;
        
        if(move_uploaded_file($tempname,$folder)){
            echo 'images est uplade';
        }

        $Name = $_POST['personel_name'];
        $bilgi = $_POST['personel_bilgi'];
        $maas = $_POST['personel_maas'];
        $services = $_POST['verdigihizmet'];
       

        $requete = $con->prepare("INSERT INTO personel(personel_name,personel_bilgi,personel_maas,verdigihizmet) VALUES('$Name','$bilgi','$maas','$services')");
        //$requete->execute(array($image,$Name,$Email,$Phone,$EnrollNumber,$DateOfAdmission));
        $requete->execute();
    }
    header('location:personel.php')
    ?>