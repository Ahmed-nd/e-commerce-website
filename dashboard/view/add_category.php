<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Category</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-lg-12">
                <form action="function/insert_category.php" method="POST"
				enctype="multipart/form-data">
				    <br>
					<input class="form-control invalid-feedback" name="name" placeholder="Category Name" type="text">
					<br>
                    <input type="submit" name="submit" value="add" class="btn btn-primary">
                </form>
			</div>
		</div><!--/.row-->