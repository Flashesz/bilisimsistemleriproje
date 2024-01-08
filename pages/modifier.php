<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel Ekle</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    session_start();
    include 'conixion.php';
    $_SESSION["randevu_id"]= $_GET['Id'];
    $id = $_SESSION["randevu_id"];
    $statement = $con -> prepare("SELECT * FROM randevu WHERE randevu_id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="update.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İsim Soyisim:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="username" value="<?php echo $table['musteri_username']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-name" name="mail" value="<?php echo $table['musteri_mail']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Telefon Numarası:</label>
                                    <input type="number" class="form-control" id="recipient-name" name="phonenumber" value="<?php echo $table['musteri_phonenumber']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Almak İstediği Hizmet:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="hizmet" value="<?php echo $table['hizmet_adi']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Randevu Saati:</label>
                                    <input type="time" class="form-control" id="recipient-name" name="zaman" value="<?php echo $table['randevu_zaman']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Randevu Tarihi:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="tarih" value="<?php echo $table['randevu_tarih']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Tercih Ettiği Personel:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="mesaj" value="<?php echo $table['personel_adi']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Eklemek İstediği Mesaj</label>
                                    <input type="text" class="form-control" id="recipient-name" name="mesaj" value="<?php echo $table['musteri_mesaj']?>">
                                  </div>
                                  <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Güncelle</button>
                              </div>
                                </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>