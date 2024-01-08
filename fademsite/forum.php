<?php
$name = isset($_POST['musteri_username']) ? $_POST['musteri_username'] : '';
$email = isset($_POST['musteri_mail']) ? $_POST['musteri_mail'] : '';
$number = isset($_POST['musteri_phonenumber']) ? $_POST['musteri_phonenumber'] : '';
$services = isset($_POST['hizmet_adi']) ? $_POST['hizmet_adi'] : '';
$time = isset($_POST['randevu_zaman']) ? $_POST['randevu_zaman'] : '';
$date = isset($_POST['randevu_tarih']) ? $_POST['randevu_tarih'] : '';
$select = isset($_POST['personel_adi']) ? $_POST['personel_adi'] : '';
$message = isset($_POST['musteri_mesaj']) ? $_POST['musteri_mesaj'] : '';

// 'username' değerini kontrol et
if (empty($name)) {
    echo "Username cannot be empty!";
} else {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'fademestetikkk');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into randevu(musteri_username, musteri_mail, musteri_phonenumber, hizmet_adi, randevu_zaman, randevu_tarih,personel_adi, musteri_mesaj) values(?, ?, ?, ?, ?, ?,?, ?)");
        $stmt->bind_param("ssississ", $name, $email, $number, $services, $time, $date,$select, $message);
        $execval = $stmt->execute();

        if ($execval) {
            echo "Registration successfully...";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
header('location:index.html')
?>
