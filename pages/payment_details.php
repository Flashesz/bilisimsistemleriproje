<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>
          
        
            <!-- start student list table -->
            <div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ödeme Ekle</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ödeme Ekle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addpayment.php" enctype="multipart/form-data">
                                  
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İsim Soyisim</label>
                                    <input type="text" class="form-control" id="recipient-name" name="kullanici_name">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Son Ödeme Tarihi:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="odeme_tarihi">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Fatura Numarası:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="fatura_numarasi">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Ödenen Tutar:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="odenen_tutar">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Toplam Tutar:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="toplam_tutar">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İşlem Tarihi:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="islem_tarihi">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" name="submit" class="btn btn-primary">Ödeme Ekle</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                 <div class="">Ödeme Tutarı</div>
                 <div class="btn-add d-flex gap-3 align-items-center">
                    <table class="table table-responsive">
                        <thead>
                            <th>İsim Soyisim</th>
                            <th>Son Ödeme Tarihi</th>
                            <th>Fatura Numarası</th>
                            <th>Ödenen Tutar</th>
                            <th>Toplam Tutar</th>
                            <th>İşlem Tarihi</th>

                        </thead>
                        <tbody> 
                        <?php include 'conixion.php'; 
                                $requete = "SELECT * FROM odeme";
                                $result = $con -> query($requete);

                                foreach($result as $value):
                            ?>

                            <tr> 
                                <td><?php echo $value['kullanici_name'] ?></td>
                                <td><?php echo $value['odeme_tarihi'] ?></td>
                                <td><?php echo $value['fatura_numarasi'] ?></td>
                                <td><?php echo $value['odenen_tutar'] ?></td>
                                <td><?php echo $value['toplam_tutar'] ?></td>
                                <td><?php echo $value['islem_tarihi'] ?></td>
                                <td class="d-md-flex gap-3 mt-3">
                                  <a href="remove2.php?Id=<?php echo $value['odeme_id']?>"><i class="far fa-trash"></i></a>
                                  <a href="modifier2.php?Id=<?php echo $value['odeme_id']?>"><i class="far fa-pen"></i></a>
                                </td>
                            </tr>
                            
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            
            </div>
               
        </div>
        <!-- end content page -->
    </main>

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>