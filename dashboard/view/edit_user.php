<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-lg-12">
        <?php
            $id = $_GET['id'];
            $select_update = "SELECT * FROM `users` WHERE id = $id";
            $result_update = $conn->query($select_update);
            $array = $result_update->fetch_assoc();
            ?>
            <form action="function/update_user.php" method="POST"
                enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id; ?>" name="id"><br>
                    <input class="form-control invalid-feedback" name="first_name" placeholder="First name" type="text" value="<?php echo $array['first_name']; ?>"><br>
                    <input class="form-control invalid-feedback" name="last_name" placeholder="Last name" type="text" value="<?php echo $array['last_name']; ?>"><br>
                    <input class="form-control invalid-feedback" name="password" placeholder="Password" type="Password"><br>
                    <input class="form-control invalid-feedback" name="email" placeholder="Email" type="email" value="<?php echo $array['email']; ?>"><br>
                    <input class="form-control invalid-feedback" name="phone" placeholder="Phone" type="text" value="<?php echo $array['phone']; ?>"><br>
                    <select class="form-control" name="gender">
                        <option disabled="" selected="">Choose ...</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <br>
                    <label for="">uplode image</label>
                    <img style="width: 50px;height=50px;" src="images/<?php echo $array['image']; ?>">
                    <input type="file" name="image">
                    <br>    
                    <input type="submit" name="submit" value="Edit" class="btn btn-primary">
                </form>
                    
                    
			</div>
		</div><!--/.row-->