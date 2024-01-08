<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    session_start();
    include 'conixion.php';
    $_SESSION["odeme_id"]= $_GET['Id'];
    $id = $_SESSION["odeme_id"];
    $statement = $con -> prepare("SELECT * FROM odeme WHERE odeme_id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="update2.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İsim Soyisim:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="kullanici_name" value="<?php echo $table['kullanici_name']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Son Ödeme Tarihi:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="odeme_tarihi" value="<?php echo $table['odeme_tarihi']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Ödenen Tutar:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="odenen_tutar" value="<?php echo $table['odenen_tutar']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Toplam Tutar:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="toplam_tutar" value="<?php echo $table['toplam_tutar']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İşlem Tarihi:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="islem_tarihi" value="<?php echo $table['islem_tarihi']?>">
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