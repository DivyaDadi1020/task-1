<?php 
include 'database.php';
if(!isset($_GET['user'])){
	
	header('location:customers.php');
}
$user=$_GET['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	 
</head>
<body background="darkblue.jpg">
	 <div class="logo-nav">
                <a href="index.html">
                  <h1><b><font color="white" size="8">Star Bank</font></b></h1>
                </a>
              </div>
	<center>
		<div>
			<br>
			<br>
			<table>
				<?php  

				$fetchcustomers=mysqli_query($database,"select * from customers where customername='$user'");
				$cust=mysqli_fetch_assoc($fetchcustomers);
				?>

        <tr>
        	<th colspan="2"><font color="red" size="7">PROFILE</font></th>
        <tr>
        <td  width="300" height="60" ><font color="yellow" size="6"> <b>Account No</b></font></td>
          <td  width="300" height="60" ><font color="white">
            <center><?php echo $cust['accountno'];?></center></font>

          </td>
      </tr>
      <tr>
      	<td  width="300" height="60" ><font color="yellow" size="6"> <b>Name</b></font></td>
           <td  width="300" height="60" ><font color="white">
            <?php echo  "<b><center> ".$cust['customername']."<br>"; 
            
          ?>
      </font></td>
  </tr>
  <tr>
  	<td  width="300" height="60" ><font color="yellow" size="6"> <b>Gender</b></font></td>
               <td  width="300" height="60" ><font color="white">
               <center> 	<?php
              
              echo $cust['Gender']."<br>";
             ?>
         </center></font></td>
     </tr>
<tr>
	<td  width="300" height="60" ><font color="yellow" size="6"> <b>Age</b></font></td>
              <td  width="300" height="60" ><font color="white">
               <center> 	<?php
              
              echo $cust['Age']."<br>";
             ?>
         </center></font></td>

    </tr>
    <tr>
    	<td  width="300" height="60" ><font color="yellow" size="6"> <b>Balance</b></font></td>
      <td  width="300" height="60" ><font color="white">
               <center> 	<?php
              
               echo $cust['bankbalance'];
             ?>
         </center></font></td>
    </tr>
   <?php 
   echo '<tr><td colspan="2" align="center"><button class="nav-link active"><a href="transfer.php?user='.$user.'">Send money</a></button></tr></td>';
   ?>
    
 




			</table>
		</div>

	</center>

 <br>
 <ul class="nav nav-pills">
 <li class="nav-item">
  <a class="nav-link active" href="customers.php"><font color="white" size="4px">Back</font></a>
  </li>
</ul>
</body>
</html>