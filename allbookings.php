<?php 
    ob_start();
    session_start();
    include_once 'dbconnect.php'; 
 function fetch_data()  
 {    
      $sql = "SELECT * FROM Booking ORDER BY bid ASC";  
      $result = mysql_query($sql);  
      while($row = mysql_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["bid"].'</td>  
                          <td>'.$row["uname"].'</td>  
                          <td>'.$row["roomtype"].'</td>  
                          <td>'.$row["packages"].'</td>  
                          <td>'.$row["checkin"].'</td>
                          <td>'.$row["checkout"].'</td>
                          <td>'.$row["qq"].'</td>
                          <td>'.$row["qq1"].'</td>
                          <td>'.$row["hotwater"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }
 ?>
 <html>
 <body> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <br /><br />  
           <div class="container" style="width:1300px;">    
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Booking ID</th>  
                               <th width="20%">UserName</th>  
                               <th width="20%">Roomtype</th>  
                               <th width="20%">Packages</th>  
                               <th width="20%">Checkin</th>
                               <th width="20%">Checkout</th>
                               <th width="20%">NO. of extrabeds</th>
                               <th width="50%">No. of extra quilts</th>
                               <th width="20%">Hotwater</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table> 
                </div>  
           </div>  
      </body>
</html>