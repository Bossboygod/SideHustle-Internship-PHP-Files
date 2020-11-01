<?php 

include('process.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($con, "SELECT * FROM crudtable WHERE id=$id");
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$age = $n['age'];
			$username = $n['username'];
			$address = $n['address'];
			$images = $n['images'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Major Task By Josh </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php $results = mysqli_query($con, "SELECT * FROM crudtable"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Username</th>
			<th>Address</th>
			<th>Image</th> 
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Age']; ?></td>
			<td><?php echo $row['Username']; ?></td>
			<td><?php echo $row['Address']; ?></td>
			<td><img src="<?php echo "images/".$row['images']?>" alt="There is no image" width='50' height='50'></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="process.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="process.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>Age</label>
		<input type="text" name="age" value="<?php echo $age; ?>">
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="input-group">
		<label>Upload Image</label>
		<input type="file" name="file" src="<?php echo "images/ ".$images; ?>">
	</div>

	<div class="input-group">
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update username</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Create User</button>
		<?php endif ?>
	</div>
	
	
</form>
</body>
</html>