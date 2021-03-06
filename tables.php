<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>List of Products</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>





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
                    <div class="small">Logged in as:</div>
                    <?php echo "<h3>" . $_SESSION['username'] . "</h3>"; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Stock Table</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Entries</li>
                        </ol>
                        <div class="row">
                      


<body>



<?php
    $conn = mysqli_connect("sql6.freemysqlhosting.net","sql6455215","XcE9smjsAe","sql6455215");
    $count = 0;
?>


<div class="container">
    <center><h1>List of Products</h1>
    <div class="table form">
        
            <table ><form action="insert.php" method="post">
                <tr>
                <th>Part</th>
                <td>
                    <?php $s = mysqli_query($conn, "select * from list");
                    ?>
                    <select name = "part">
                    <?php
                        while($r = mysqli_fetch_array($s))
                        {
                        ?>
                        <option><?php echo $r['MeatType']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </td>

                    <th>Price</th>
                    <td><input type="number" placeholder="Price" name="price"></td>
          
                    <th>Quantity</th>
                    <td><input type="number" placeholder="Quantity" name="quantity" value = "0"></td>
                </tr>
                <tr>
                    <td><button type="submit" id = "update">Update</td>
                    <td><button type="submit" id = "add"><a href = newitem.php>Add New Product</a></td>
                </tr>
                </form>
            </table>
            <div class="row">
                        <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                    <th>Product ID</th>
                    <th>Meat Type</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th></th>
                </tr> </thead>
                <?php
                    $sql = "SELECT * FROM list";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)){
                        $count++;
                        echo '<tr>
                            <td>'.$count.'</td>
                            <td>'.$row['MeatType'].'</td>
                            <td>???'.$row ['Price'].'</td>';
                            if ($row['Quantity']<=20)
                            {
                            echo "<td style='background-color: #FF4C4C;'>"  .$row ['Quantity'].' kg.</td>';
                            }
                            else if ($row['Quantity']<=30)
                            {
                            echo "<td style='background-color: #CCAD51;'>"  .$row ['Quantity'].' kg.</td>';
                            }
                            else 
                            {
                            echo "<td style='background-color:#77dd77;'>"  .$row ['Quantity'].' kg.</td>';
                            }?>
                            <td><a href = "deleteprod.php?id=<?php echo $row['ProductID']; ?>">Delete Item</a></td>
                            <?php } ?>
                            </tr> 
                      </table>
                
                     </div>
                    </div>

    </div> 
</body>
</html>
                        <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                      
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">                     
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
