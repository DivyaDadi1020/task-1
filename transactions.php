<?php 
include "navbar2.php";
include "database.php";

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Transactions</title>
       <link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body background="darkblue.jpg">
 	 <div class="logo-nav">
                <a href="index.html">
                  <h1><b><font color="white" size="8">Star Bank</font></b></h1>
                </a>
              </div>
 	<center>

 	<h1 style="color:white; size:6px; color:red; ">TRANSACTIONS HISTORY</h1>
 	<table border="1">
 		<th>Sender</th>
 		<th>Receiver</th>
 		<th>Date</th>
 		<th>Amount</th>
 		<?php
 				$fetchtransactions = mysqli_query($database,"Select * from transfers");

 				while ($customer = mysqli_fetch_assoc($fetchtransactions))
 				 {
 					echo '<tr><td>'.$customer['sender'].'</td><td>'.$customer['receiver'].'</td><td>'.$customer['date'].'</td><td>'.$customer['amount'].'</td></tr>';
 				}





 		?>
 	</table>

 	</center>

 <br>
 <ul class="nav nav-pills">
 <li class="nav-item">
  <a class="nav-link active" href="index.html">Back</a>
  </li>
</ul>
 
 </body>
 </html>