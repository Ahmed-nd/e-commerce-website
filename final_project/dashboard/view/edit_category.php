<?php 
$id = $_GET['id'];
$select_update = "SELECT * FROM category WHERE id = $id";
$result_update = $conn->query($select_update);
$array = $result_update->fetch_assoc();

?>				

				<form action="function/update_category.php" method="POST" >
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input class="form-control" type="text" name="name"  value="<?php echo $array['name'];?>" ><br>
					
					<label>Upload Image</label>
					<img style="width: 100px;height: 100px;" src="images/<?php echo $array['img']; ?>">
					<input type="file" name="image"><br>
					<input type="submit" class="btn btn-primary" name="submit" value="Edit">
				</form>