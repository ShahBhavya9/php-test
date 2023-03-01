<?php 

include 'adapter.php';

$sql = "SELECT * FROM `customers` ORDER BY `customerName` ASC ";
$result = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer</title>
</head>
<body>
	<h2>Customer Personal Details</h2>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<th>Customer Number</th>
			<th>Customer Name</th>
			<th>Phone</th>
			<th>Address Line 1 </th>
			<th>City</th>
			<th>State</th>
			<th>Postal Code</th>
			<th>Credit Limit</th>
		</tr>
				<?php foreach($result as $row): ?>
		<tr>
			<td> <?php echo $row['customerNumber']; ?>  </td>
			<td> <?php echo $row['customerName']; ?></td>
			<td> <?php echo $row['phone']; ?></td>
			<td> <?php echo $row['addressLine1']; ?></td>
			<td> <?php echo $row['city']; ?></td>
			<td> <?php echo $row['state']; ?></td>
			<td> <?php echo $row['postalCode']; ?></td>
			<td> <?php echo $row['creditLimit']; ?></td>
		</tr>
	<?php endforeach; ?>

	</table>
</body>
</html>