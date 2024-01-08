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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Personel Ekle</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Personel Ekle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addpersonel.php" enctype="multipart/form-data">
                                  
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İsim:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="personel_name">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Bilgi:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="personel_bilgi">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Maaş:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="personel_maas">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Verdiği Hizmet:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="verdigihizmet">
                                  </div>
                                  
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" name="submit" class="btn btn-primary">Personel Ekle</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                <div class="courses">
                    <table class="table table-responsive">
                        <thead>
                            <th>İsim Soyisim</th>
                            <th>Bilgi</th>
                            <th>Maaş</th>
                            <th>Verdiği Hizmet</th>
                            
                        </thead>
                        <tbody> 
                        <?php include 'conixion.php'; 
                                $requete = "SELECT * FROM personel";
                                $result = $con -> query($requete);

                                foreach($result as $value):
                            ?>

                            <tr> 
                                <td><?php echo $value['personel_name'] ?></td>
                                <td><?php echo $value['personel_bilgi'] ?></td>
                                <td><?php echo $value['personel_maas'] ?></td>
                                <td><?php echo $value['verdigihizmet'] ?></td>
                                  
                                <td class="d-md-flex gap-3 mt-3">
                                  <a href="remove3.php?Id=<?php echo $value['personel_id']?>"><i class="far fa-trash"></i></a>
                                  <a href="modifier3.php?Id=<?php echo $value['personel_id']?>"><i class="far fa-pen"></i></a>
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