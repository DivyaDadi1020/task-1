<?php 
include 'database.php';
if(!isset($_GET['user']))
	header('location:customers.php');
$user=$_GET['user'];
$fetch=mysqli_query($database,"select * from customers where customername='$user' ");
$customer=mysqli_fetch_assoc($fetch);
$mybalance=$customer['bankbalance'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Send Money</title>
	<link rel="stylesheet" type="text/css" href="formstyles.css">
	
</head>
<body background="darkblue.jpg">
	 <div class="logo-nav">
                <a href="index.html">
                  <h1><b><font color="white" size="8">Star Bank</font></b></h1>
                </a>
              </div>
<center>
	<h1  style="color:white ;">Transfer Money from <?php echo $user;?> to </h1>
	<form name="f" action="transferbackend.php" method="post" onsubmit="return validate();" autocomplete="off">
		<input type="text" name="a" placeholder="Enter Account Number"><br><br>
		<input type="text" name="b" placeholder="Enter Amount(in rupees)"><br><br>
		<input type="hidden" name="c" value="<?php echo $mybalance; ?>">
		<br> 
		<input type="hidden" name="d" value="<?php echo $user; ?>"><br>
		<input type="Submit"  value="Send">
	</form>
</center>
<script type="text/javascript">
	function validate()
	{
		var a=document.f.a.value;
		var b=document.f.b.value;
		var c=document.f.c.value;
		if((a.trim()).length==0 || (b.trim()).length==0)
		{
			alert("feilds can't be empty");
			return false;
		}
		document.getElementById("f").reset();
		//if(c<b)
		//{
			//alert("insufficient balance");
			//return false;
		//}
	}
</script>
<br>
 <ul class="nav nav-pills">
 <li class="nav-item">
  <a class="nav-link active" href="customers.php"><font color="white" size="6px">Back</font></a>
  </li>
</ul>
</body>
</html>