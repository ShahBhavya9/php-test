<?php    

include 'adapter.php';

$id = $_GET['a'];

$sql = "SELECT * FROM `orders` WHERE `customerNumber`= '{$id}' ";
$result = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Customer</title>
	<style type="text/css">
		.filter{
			float: right;
			margin-bottom: 25px;
		}
	</style>

</head>
<body>
	<h2>Order Information</h2>
	

	<form action="date.php" method="POST">
		<div>
			<label>Filter By Date : </label>
			Start Date:<input type="date" name="start" placeholder="yyyy-mm-dd" > 
			End Date: <input type="date" name="end" placeholder="yyyy-mm-dd" >
			<button type="submit"> Go </button>
		</div>
	</form>

	<table border="1" width="100%" cellspacing="0">
		<tr>
			<th>Order Number</th>
			<th>Order Date</th>
			<th>Shipped Date</th>
			<th>Comment</th>
			<th>Status</th>
		</tr>
		<?php  foreach($result as $row):   ?>
		<tr>
			<td> <?php echo $row['orderNumber']; ?> </td>
			<td> <?php echo $row['orderDate']; ?></td>
			<td> <?php echo $row['shippedDate']; ?></td>
			<td> <?php echo $row['comments']; ?></td>
			<td> <?php echo $row['status']; ?></td>
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>