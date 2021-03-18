<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-lg-12">
                <form action="function/insert_user.php" method="POST"
                enctype="multipart/form-data">
                <br>
                    <input class="form-control invalid-feedback" name="first_name" placeholder="First name" type="text"><br>
                    <input class="form-control invalid-feedback" name="last_name" placeholder="Last name" type="text"><br>
                    <input class="form-control invalid-feedback" name="password" placeholder="Password" type="Password"><br>
                    <input class="form-control invalid-feedback" name="email" placeholder="Email" type="email"><br>
                    <input class="form-control invalid-feedback" name="phone" placeholder="Phone" type="text"><br>
                    <select class="form-control" name="gender">
                        <option disabled="" selected="">Choose ...</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <br>
                    <label for="">uplode image</label>
                    <input type="file" name="image">
                    <br>    
                    <input type="submit" name="submit" value="add" class="btn btn-primary">
                </form>
            </div>
            </div><!--/.row-->
	