<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $nameforum = $_POST['name'];
        $numberforum = $_POST['number'];
        $email = $_POST['mail'];
        $hizmetforum = $_POST['hizmet'];
        $zamanforum= $_POST['zaman'];
        $tarihforum= $_POST['tarih'];

    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eclasse";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO randevu (id, name, mail, number, hizmet, zaman, tarih ) VALUES ('0', '$nameforum', '$numberforum', '$email','$hizmetforum','$zamanforum','$tarihforum')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>