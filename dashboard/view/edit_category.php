<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Category</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-lg-12">
        <?php
            $id = $_GET['id'];
            $select_update = "SELECT * FROM `category` WHERE id = $id";
            $result_update = $conn->query($select_update);
            $array = $result_update->fetch_assoc();
            ?>
                <form action="function/update_category.php" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <br>
                    <input class="form-control invalid-feedback" name="name" placeholder="Name Category" type="text" value="<?php echo $array['name']; ?>">
                    <br>   
                    <input type="submit" name="submit" value="Edit" class="btn btn-primary">
                    
                </form>
			</div>
		</div><!--/.row-->