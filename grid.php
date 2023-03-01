<?php 
include 'adapter.php';

$sql = "SELECT * FROM `customers`c LEFT OUTER JOIN `employees`e ON c.salesRepEmployeeNumber = e.employeeNumber ";
$result = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer </title>
	<style type="text/css">
		.filter{
			float: right;
			margin-bottom: 25px;
		}
	</style>
</head>
<body>
	<h2>Fetch Data</h2>
	<select name="filter" class="filter" onchange="location = this.value;">
		<option>FILTER</option>
		<option value="customer.php">Customer Name</option>
		<option value="employee.php"> Employee Name</option>
	</select>

	<form action="credit.php" method="POST">
		<div>
			<label>Filter By Credit Limit : </label>
			<input type="number" name="lowerlimit" placeholder="Lower Limit" > To <input type="number" name="upperlimit" placeholder="Upper Limit" >
			<button type="submit"> Go </button>
		</div>
	</form>

	<table border="1" width="100%" cellspacing="0">
		<tr>
			<th>Customer Number</th>
			<th>Customer Name</th>
			<th>Phone</th>
			<th>Address Line 1 </th>
			<th>City</th>
			<th>State</th>
			<th>Postal Code</th>
			<th>Employee First Name</th>
			<th>Credit Limit</th>
			<th> View Customer</th>
		</tr>

		<?php foreach($result as $row): ?>
		<tr>
			<td> <?php echo $row['customerNumber']; ?>  </td>
			<td> <?php echo $row['customerName']; ?></td>
			<td> <?php echo $row['phone']; ?></td>
			<td><?php echo $row['addressLine1']; ?></td>
			<td> <?php echo $row['city']; ?></td>
			<td> <?php echo $row['state']; ?></td>
			<td> <?php echo $row['postalCode']; ?></td>
			<td> <?php echo $row['firstName']; ?></td>
			<td><?php echo $row['creditLimit']; ?></td>
			<td> <a href="view.php?a=<?php echo $row['customerNumber']; ?>">View Customer </a> </td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>