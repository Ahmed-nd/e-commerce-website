<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-lg-12">
        <?php
            $id = $_GET['id'];
            $select_update = "SELECT * FROM `products` WHERE id = $id";
            $result_update = $conn->query($select_update);
            $array = $result_update->fetch_assoc();
            ?>
            <form action="function/update_user.php" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id; ?>" name="id"><br>
                    <input class="form-control invalid-feedback" name="name" placeholder="name products" type="text" value="<?php echo $array['name']; ?>"><br>
                    <input class="form-control invalid-feedback" name="price" placeholder="price" type="text" value="<?php echo $array['price']; ?>"><br>
                    <input class="form-control invalid-feedback" name="discount" placeholder="discount" type="text" value="<?php echo $array['discount']; ?>"><br>
                    <!-- HEre there are ERORR -->
                    <input class="form-control invalid-feedback" name="id_category" placeholder="Category" type="text" value="<?php echo $array['id_category']; ?>"><br>
                    <input class="form-control invalid-feedback" name="p_date" type="date" ><br>
                    <input class="form-control invalid-feedback" name="stock" placeholder="Stock" type="text" value="<?php echo $array['stock']; ?>"><br>
                    <label for="">uplode image</label>
                    <img style="width: 50px;height=50px;" src="images/<?php echo $array['image']; ?>">
                    <input type="file" name="image">
                    <br>    
                    <input type="submit" name="submit" value="Edit" class="btn btn-primary">
                </form>
                    
                    
			</div>
		</div><!--/.row-->