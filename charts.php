<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Charts</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

<!-- ----------------------------SCRIPT FOR BAR CHART ----------------------------------------------- -->

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

  <!-- ----------------------------SCRIPT FOR PIE CHART ----------------------------------------------- -->
 

    </head>

<!-- ------------------------------NAVIGATION BAR---------------------------------------------------------------- -->
    

   <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">Home Page</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
           
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                User Control
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Admin   
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                
                                            <a class="nav-link" href="usercontrol.php">User Control</a>
                                            <a class="nav-link" href="register.php">New User</a>


                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>

                            <a class="nav-link" href="orderform.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Order Form
                            </a>

                            <a class="nav-link" href="orderlist.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Order List
                            </a>

                            <a class="nav-link" href="doneorders.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Completed Orders
                            </a>

                      
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        
                    </div>
                </nav>
            </div>


<!-- ---------------------------------CHART BOARDS------------------------------------------------------------- -->


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Charts</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">Charts of the sales</div>
                        </div>

<!-- ---------------------------------SALES WITHIN THE WEEK LINE GRAPH------------------------------------------------- -->
</body>

<!-- 
$server = "sql6.freemysqlhosting.net";
$user = "sql6455215";
$pass = "XcE9smjsAe";
$database = "sql6455215";
-->

<?php  
 $connect = mysqli_connect("sql6.freemysqlhosting.net", "sql6455215", "XcE9smjsAe", "sql6455215");  
 $queryLineGraph = "SELECT *
                    from complete
                    where day(date)=day(curdate())
                    "; 
 $resultLineGraph = mysqli_query($connect, $queryLineGraph);

 ?>  

 <head>
 <script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChartLineGraph);

        function drawChartLineGraph()
        {
            var data = google.visualization .arrayToDataTable([
                ['Date', 'Total'],
                <?php
                $query = "select * from complete";
                $res = mysqli_query($connect, $queryLineGraph);
                while($data = mysqli_fetch_array($res))
                {
                    $month = $data['Date'];
                    $profit = $data['Total'];
                    ?>
                    ['<?php echo $month;?>',<?php echo $profit;?>],
                    <?php
                }
                ?>
            ]);

            var options = 
            {
                curveType: 'function',
                legend: { position: 'bottom'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
        </script>
</head>
 
                                <div class="card mb-4" style="width: 100%">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Sales Chart within the Day
                                    </div>

                                    <div class="card-body" id="curve_chart" style="width: 100%; height: 500px;"></div>

                                    <div class="card-footer small text-muted"></div>
                                </div>
                            </div>

<!-- ---------------------------------SALES CHART BAR GRAPH------------------------------------------------------------- -->

<?php 
$queryBarGraph = "
SELECT SUM(Kilos) as Kilos,ProductID
FROM complete
GROUP BY ProductID";

$resultBarGraph = mysqli_query($connect, $queryBarGraph);
$chart_dataBarGraph = '';
while($row = mysqli_fetch_array($resultBarGraph))
{
 $chart_dataBarGraph .= "{ Kilos:'".$row["Kilos"]."', ProductID:".$row["ProductID"]."}, ";
}
$chart_dataBarGraph = substr($chart_dataBarGraph, 0, -2);


?>

                        <div class="card mb-4" style="width: 96%; margin-left:22px;">
                            <div class="card-header" >
                                <i class="fas fa-chart-area mr-1"></i>Kilos Sold for each Product</div>

                            <div class="container"> 
                            <br /><br />
                            <div id="chart" style="width: 100%;"></div>
                            </div>

                            <div class="card-footer small text-muted"></div>
                        </div>

                        <div class="row"> 

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_dataBarGraph; ?>],
 xkey:'ProductID',
 ykeys:['Kilos'],
 labels:['Kilos'],
 hideHover:'auto',
 stacked:true
});
</script>

<!-- -------------------------------SALES REVIEW YEARLY----------------------------------------------------------------- -->
</body>

<?php 
 $queryLineGraphYearly = "SELECT * from complete where month(date)=month(curdate())";  
 $resultLineGraphYearly = mysqli_query($connect, $queryLineGraphYearly);
 
 ?>  

 <head>
 <script type="text/javascript" src="http://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChartLineGraphYearly);

        function drawChartLineGraphYearly()
        {
            var dataYearly = google.visualization .arrayToDataTable([
                ['Date', 'Total'],
                <?php
                $queryYearly = "select * from complete";
                $resYearly = mysqli_query($connect, $queryLineGraphYearly);
                while($dataYearly = mysqli_fetch_array($resYearly))
                {
                    $monthYearly = $dataYearly['Date'];
                    $profitYearly = $dataYearly['Total'];
                    ?>
                    ['<?php echo $monthYearly;?>',<?php echo $profitYearly;?>],
                    <?php
                }
                ?>
            ]);

            var optionsYearly = 
            {
                curveType: 'function',
                legend: { position: 'bottom'}
            };

            var chartYearly = new google.visualization.LineChart(document.getElementById('curve_chart2'));

            chartYearly.draw(dataYearly, optionsYearly);
        }
        </script>
</head>
 
                                <div class="card mb-4" style="width: 94.5%; margin-left: 30px;">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Sales within the Month
                                    </div>

                                    <div class="card-body" id="curve_chart2" style="width: 100%; height: 500px;"></div>

                                    <div class="card-footer small text-muted"></div>
                                </div>
                            </div>

<!-- ----------------------------------------------------------------------------------------------------------- -->

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">    
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
    </body>
</html>
