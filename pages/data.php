<?php
function getChartData() {
    $conn = new mysqli('localhost', 'kullanici_adi', 'sifre', 'veritabani_adi');

    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }

    $sql = "SELECT personel_adi, COUNT(*) AS tercih_sayisi FROM randevu GROUP BY personel_adi";
    $result = $conn->query($sql);

    if (!$result) {
        die("Sorgu hatası: " . $conn->error);
    }

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $conn->close();
    return $data;
}
?>
