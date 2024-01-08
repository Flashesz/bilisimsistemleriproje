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
    $_SESSION["hizmet_id"]= $_GET['Id'];
    $id = $_SESSION["hizmet_id"];
    $statement = $con -> prepare("SELECT * FROM hizmetler WHERE hizmet_id = $id");
    $statement->execute();
    $table = $statement -> fetch();

  ?>
<div class="container w-50">


<form method="POST" action="update4.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Hizmet Adı:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="hizmet_name" value="<?php echo $table['hizmet_name']?>">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Ücret:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="hizmet_price" value="<?php echo $table['hizmet_price']?>">
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