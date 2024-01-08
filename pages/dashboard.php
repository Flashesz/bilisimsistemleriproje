<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Personeller', 'Hizmet Başı'],
          ['Beyza Kurt',     2],
          ['Aysima Yılmaz',      4],
          ['Azra',  6],
          ['Beren', 2],
          ['Fadime',    9]
        ]);

        var options = {
    title: 'Tercih Edilen Personeller',
   
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'İsmi');
        data.addColumn('number', 'Maaşı');
        data.addColumn('boolean', 'Tam Zamanlı');
        data.addColumn('boolean', 'İzinli');
        data.addRows([
          ['Aysima Yılmaz',  {v: 15000, f: 'TL15,000'}, true,false],
          ['Azra Taner',   {v:10000,   f: 'TL10,000'},  false,false],
          ['Beren Kaya', {v: 10000, f: 'TL10000'}, false,false],
          ['Beyza Kurt',   {v: 15000,  f: 'TL15,000'},  true,false],
          ['Fadime Göker',   {v: 15000,  f: 'Yönetici'},  true,false]
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ay', 'Randevu Sayısı',],
          ['Eylül', 12,],
          ['Ekim', 18,],
          ['Kasım', 22],
          ['Aralık', 24]
        ]);

        var options = {
          chart: {
            title: 'Randevu Sayısı',
            subtitle: 'Ay Olarak Artış',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fadem Estetik Admin Paneli</title>
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
            include 'conixion.php';
            $nbr_students = $con->query("SELECT * FROM randevu");
            $nbr_students = $nbr_students->rowCount();

            $nbr_cours = $con->query("SELECT * FROM personel");
            $nbr_cours = $nbr_cours->rowCount();

            $nbr_odeme = $con->query("SELECT SUM(odenen_tutar) FROM odeme")->fetchColumn();
            $nbr_beklenen_odeme= $con->query("SELECT SUM(toplam_tutar) FROM odeme")->fetchColumn();
            


        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px">
            
        <?php 
            include "component/header.php";
        ?>
            <div class="cards row gap-3 justify-content-center mt-5">
                <div class=" card__items card__items--blue col-md-3 position-relative">
                    <div class="card__students d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-calendar h3"></i>
                        <span>Randevular</span>
                    </div>
                    <div class="card__nbr-students">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_students; ?></span>
                    </div>
                </div>

                <div class=" card__items card__items--rose col-md-3 position-relative">
                    <div class="card__Course d-flex flex-column gap-2 mt-3">
                        <i class="fa fa-user h3"></i>
                        <span>Personeller</span>
                    </div>
                    <div class="card__nbr-course">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_cours; ?></span>
                    </div>
                </div>

                <div class=" card__items card__items--yellow col-md-3 position-relative">
                    <div class="card__payments d-flex flex-column gap-2 mt-3">
                        <i class="fa fa-credit-card h3"></i>
                        <span>Ödemeler</span>
                    </div>
                    <div class="card__payments">
                        <span class="h5 fw-bold nbr"><?php echo $nbr_odeme; ?></span>
                    </div>
                </div>

                <div class="card__items card__items--gradient col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fa fa-exchange h3"></i>
                        <span>Beklenen Ödeme</span>
                    </div>
                    <span class="h5 fw-bold nbr"><?php echo $nbr_beklenen_odeme; ?></span>
                </div>
                
        <div id="piechart" class="chart"></div>
        <div id="table_div"></div>
        <div id="barchart_material" ></div>
        
        
        
    </div>

            </div>
            
        </div>
        <!-- end contentpage -->
        
    </main>
    
        
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>