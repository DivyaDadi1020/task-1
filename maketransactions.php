<?php 
include "database.php";
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Make Transactions</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="formstyles.css">

</head>
<body background="darkblue.jpg">
	 <div class="logo-nav">
                <a href="index.html">
                  <h1><b><font color="white" size="8">Star Bank</font></b></h1>
                </a>
              </div>
	<center>
	<h1 style="color:white ;">Transfer</h1>
	<form name="form" method="post" onsubmit="return validate();" action="maketransback.php" autocomplete="off">
		<input type="text" name="a" placeholder="Enter Sender account number"><br>
		<input type="text" name="b" placeholder="Enter Receiver account number"><br>
		<input type="text" name="c" placeholder="Enter amount (in rupees)"><br>
		<input type="submit" value ="Send">
		</form>
	</center>
 <br>
 <ul class="nav nav-pills">
 <li class="nav-item">
  <a class="nav-link active" href="index.html">Back</a>
  </li>
</ul>


</body>
</html>