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
    $_SESSION["personel_id"]= $_GET['Id'];
    $id = $_SESSION["personel_id"];
    $statement = $con -> prepare("SELECT * FROM personel WHERE personel_id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="update3.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İsim Soyisim:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="personel_name" value="<?php echo $table['personel_name']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Personel Bilgisi:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="personel_bilgi" value="<?php echo $table['personel_bilgi']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Maaş:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="personel_maas" value="<?php echo $table['personel_maas']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Verdiği Hizmet:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="verdigihizmet" value="<?php echo $table['verdigihizmet']?>">
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