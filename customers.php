<?php 

include "database.php";

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Customer Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <style type="text/css">
        table{
            width: 80%;
        }
    </style>
 </head>
 <body background="darkblue.jpg">
    <div class="logo-nav">
                <a href="index.html">
                  <h1><b><font color="white" size="8">Star Bank</font></b></h1>
                </a>
              </div>
 	<center>
    <div></div>

 	<h1 style="color:red;">CUSTOMERS</h1>
 	<table>
 		<th><font color="yellow">Account number</font></th>
 		<th><font color="yellow">Customer Name</font></th>
 		 <th><font color="yellow">Gender</font></th> 
         <th><font color="yellow">Age</font></th>
 		<th><font color="yellow">Balance</font></th>
 		<th><font color="yellow">View profile</font></th>
        <th><font color="yellow">Transfer Money</font></th>
 		<?php
 				$fetchcustomers = mysqli_query($database,"Select * from customers");

 				while ($cust = mysqli_fetch_assoc($fetchcustomers))
 				 {
 					echo '<tr> 
                    <td>'.$cust['accountno'].'</td> 
                    <td>'.$cust['customername'].'</td> 
                    <td>'.$cust['Gender'].'</td> 
                    <td>'.$cust['Age'].'</td>
                    <td>'.$cust['bankbalance'].'</td> 
                    <td><button class="button button1"><a href="profile.php?user='.$cust['customername'].'">Click here</a></button></td>
                    <td><button class="button button1"><a href="transfer.php?user='.$cust['customername'].'">Click here</a></button></td>
                    </tr>';
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