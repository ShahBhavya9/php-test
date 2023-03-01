<?php 
include 'adapter.php';

$start = $_POST['start'];
$end = $_POST['end'];

$sql = "SELECT * FROM `orders` WHERE `orderDate` BETWEEN '{$start}' AND '{$end}' ORDER BY `orderDate` ASC ";
$result = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Filter by Date</title>
</head>
<body>
	<h2>Filter by: Date</h2>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<th>Order Number</th>
			<th>Order Date</th>
			<th>Status</th>
			<th>Comments</th>
		</tr>
		<?php foreach($result as $row): ?>
		<tr>
			<td> <?php echo $row['orderNumber']; ?> </td>
			<td> <?php echo $row['orderDate']; ?> </td>
			<td> <?php echo $row['status']; ?> </td>
			<td> <?php echo $row['comments']; ?> </td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>