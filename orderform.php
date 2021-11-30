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
        <title>Order Form</title>
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
                        <h1 class="mt-4">Order Form</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
            </div>

            <div class="container">

<?php
$conn = mysqli_connect("localhost","root","","sallys");
?>




<div class="container">
<div style=" float: left;  margin-top: 40px;">
    <div class="table form">
        
    <table >
            <form action="addorder.php" method="post">
            <tr>
            <th>Customer Name</th>
            <td><input type="text" placeholder="Customer Name" size = 40 name = "customer" pattern="[a-zA-Z]{1,}" required></td>
            </tr>
            
            <tr>
            <th>Contact Number</th>
            <td><input type = "tel" maxlength = "11" style = "width: 100%" placeholder="Contact Number" name="phone" required></td>
            </tr>

            <tr>
            <th>Address</th>
            <td><input type = "text" placeholder="House Address" size = 40 name = "add" required></td>
            </tr>

            <tr><th>Mode Of Payment</th>    
            <td>
            <input type="radio" name="mop" value="Gcash">
            <label for="male">Gcash</label><br>
            <input type="radio" name="mop" value="Cash On Delivery">
            <label for="female">Cash On Delivery</label><br>
            <input type="radio" name="mop" value="Walk-in">
            <label for="female">Walk-in</label><br>
            </td></tr>   
          
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

            <tr>
            <th>Kilos</th>
            <td>
            <input type = "number" style = "width: 100%" name = "kiloweight" placeholder="Input Kilos">
            </td>

            <tr>
            <th>Total Cost</th>
            <td>
                <input type = "number" style = "width: 100%" name = "total" placeholder = "Total Cost">
            </td>
            <tr>

            <th>Instruction</th>
            <td><input type="text" placeholder="Message" size = 40 name = "message" required></td>     </tr>
            </tr>
            </tr>

            <tr>  
            <td></td>
            <td><button  style = "width: 100%;" type="submit">Order</td>
            </tr> 
            </form> 
        </table>
    </div>
                </div>
    <br>

    
    <div style=" float: left; margin-left: 100px; margin-top: 20px;">
    <table border="2">
  <tr>
    <td style="text-align: center;">Meat Type</td>
    <td style="text-align: center;">Price</td>
  </tr>
               

<?php

$records = mysqli_query($conn,"select * from list"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td style="text-align: center; width: 130px;"><?php echo $data['MeatType']; ?></td>
    <td style="text-align: center; width:100px;"><?php echo $data['Price']; ?></td>
    <td style="text-align: center; width:150px;"><img src="<?php echo $data['image']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>  
    </div>
</div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

  
    </body>
</html>