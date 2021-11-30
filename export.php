<?php  

$conn = mysqli_connect("localhost","root","","sallys");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM complete";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
   <tr>
   <th>Date</th>
   <th>Customer Name</th>
   <th>Contact No.</th>
   <th>Address</th>
   <th>Mode of Payment</th>
   <th>Product ID</th>
   <th>Part</th>
   <th>Kilos</th>
   <th>Total Cost</th>
   
</tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= 
   '       <tr>
   <td>'.$row['Date'].'</td>
   <td>'.$row['CustomerName'].'</td>
   <td>'.$row['ContactNo'].'</td>
   <td>'.$row ['Address'].'</td>
   <td>'.$row['ModeOfPayment'].'</td>
   <td>'.$row['ProductID'].'</td>
   <td>'.$row['Part'].'</td>
   <td>'.$row['Kilos'].' kg</td>
   <td>'.$row['Total'].'</td>
   </tr>>  ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Sallys Completed Order.xls');
  echo $output;
 }
}
?>