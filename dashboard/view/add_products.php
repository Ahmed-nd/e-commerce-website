<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
        <div class="col-lg-12">
                <form action="function/insert_product.php" method="POST"
				enctype="multipart/form-data">
				    <br>
					<input class="form-control invalid-feedback" name="name" placeholder="Name Product" type="text"><br>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" class="price">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                    </div><br>
                    <input class="form-control invalid-feedback" name="id_category" placeholder="Category ID" type="text"><br>
                    <input class="form-control invalid-feedback" name="discount" placeholder="Discount" type="text"><br>
                    <input class="form-control invalid-feedback" name="p_date" type="date"><br>
                    <input class="form-control invalid-feedback" name="stock" placeholder="Stock" type="text"><br>
                    <br>
                    <label for="">uplode image</label>
                    <input type="file" name="image">
                    <br>    
                    <input type="submit" name="submit" value="add" class="btn btn-primary">
					<br>
                    <input type="submit" name="submit" value="add" class="btn btn-primary">
                </form>
			</div>
		</div><!--/.row-->