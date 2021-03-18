<?php 
$id = $_GET['id'];
$select_update = "SELECT * FRom users WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				
		<form action="function/update_user.php" method="POST" enctype="multipart/form-data">
	<input class="form-control" type="text" name="firstname" placeholder="Enter Firstname" value="<?php echo $array['first_name'];?>" ><br>
	<input class="form-control" type="text" name="lastname" placeholder="Enter Lastname" value="<?php echo $array['last_name'];?>" ><br>
	<input class="form-control" type="password" name="password" placeholder="Enter Password"><br>
	
	<input class="form-control" type="text" name="address" placeholder="Enter Address"  value="<?php echo $array['address'];?>"><br>
	<input class="form-control" type="email" name="email" placeholder="Enter Email" value="<?php echo $array['email'];?>"><br>
	<input class="form-control" type="text" name="phone" placeholder="Enter Phone" value="<?php echo $array['phone'];?>"><br>
	<label>Upload Image</label>
	<img style="width: 100px;height: 100px;" src="images/<?php echo $array['image']; ?>">
	<input type="file" name="image"><br>
	<select class="form-control" name="gender">
		<option disabled="" selected="">Choose</option>
		<option value="0">Male</option>
		<option value="1">Female</option>
	</select><br>

	<input type="submit" class="btn btn-primary" name="submit" value="ADD">
				</form>
