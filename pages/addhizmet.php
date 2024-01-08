<?php 
    include 'conixion.php';
    if(isset($_POST['submit'])){
        
       

        $Name = $_POST['hizmet_name'];
        $ucret = $_POST['hizmet_price'];
       
       
       

        $requete = $con->prepare("INSERT INTO hizmetler(hizmet_name, hizmet_price) VALUES('$Name','$ucret')");

        //$requete->execute(array($image,$Name,$ucret));
        $requete->execute();
    }
    header('location:hizmet.php')
    ?>