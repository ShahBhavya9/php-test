<?php 
include 'adapter.php';

$sql = "SELECT * FROM `employees` ORDER BY `firstName` ASC ";
$result = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<h2>Employee Personal Details</h2>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<th>Employee Number</th>
			<th>Employee First Name</th>
			<th>Employee Last Name</th>
			<th>Extension </th>
			<th>Email</th>
			<th>Office Code</th>
			<th>Reports to</th>
			<th>Job Title</th>
		</tr>
				<?php foreach($result as $row): ?>
		<tr>
			<td> <?php echo $row['employeeNumber']; ?>  </td>
			<td> <?php echo $row['firstName']; ?></td>
			<td> <?php echo $row['lastName']; ?></td>
			<td> <?php echo $row['extension']; ?></td>
			<td> <?php echo $row['email']; ?></td>
			<td> <?php echo $row['officeCode']; ?></td>
			<td> <?php echo $row['reportsTo']; ?></td>
			<td> <?php echo $row['jobTitle']; ?></td>
		</tr>
	<?php endforeach; ?>

	</table>
</body>
</html>