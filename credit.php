<?php 
include 'adapter.php';


$ll = $_POST['lowerlimit'];
$ul = $_POST['upperlimit'];

$sql = "SELECT * FROM `customers` WHERE `creditLimit` BETWEEN '{$ll}' AND '{$ul}' ORDER BY `creditLimit` ASC ";
$result = mysqli_query($connect,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Credit Limit</title>
</head>
<body>
	<h2>Filter : Credit Limit</h2>
	<table border="1" width="60%" cellspacing="0">
		<tr>
			<th>Customer Number</th>
			<th>Customer Name</th>
			<th>Credit Limit</th>
		</tr>
		<?php foreach($result as $row): ?>
		<tr>
			<td> <?php echo $row['customerNumber']; ?> </td>
			<td> <?php echo $row['customerName']; ?> </td>
			<td> <?php echo $row['creditLimit']; ?> </td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>