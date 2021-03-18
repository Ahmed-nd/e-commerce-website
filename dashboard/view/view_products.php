<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->

<div class="row">

		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">name</th>
					<th scope="col">price</th>
					<th scope="col">discount</th>
					<th scope="col">Category</th>
                    <th scope="col">date</th>
                    <th scope="col">stock</th>
					<th scope="col">Control</th>
				</tr>
			</thead>
			<tbody>
			<?php
			$select = "SELECT * from `products`";
			$result = $conn->query($select);
			$count = 1;
        	foreach($result as $key){
			?>
				<tr>
					<th scope="row"><?php echo $count++; ?></th>
                        <td><?php echo $key['name']; ?></td>
                        <td><?php echo $key['price']; ?></td>
                        <td><?php echo $key['discount']; ?></td>
                        <td><?php echo $key['id_category']; ?></td>
                        <td><?php echo $key['p_date']; ?></td>
                        <td><?php echo $key['stock']; ?></td>
						<td><img style="width: 50px;height=50px;" src="images/<?php echo $key['image']; ?>"></td>
						<td><a href="?do=edit&id=<?php echo $key['id']; ?>"class="btn btn-warning">Edit</a>
						
						<!-- Button trigger modal -->
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key['id']; ?>">
					Delete
					</button>
					<!-- Modal -->
					<div class="modal fade" id="exampleModal<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							are you sure you to delete (<span style="color: red;"><?php echo $key['name']; ?></span>)
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<a href="function/delete_products.php?id=<?php echo $key['id']; ?>" class="btn btn-primary">Delete</a>
						</div>
						</div>
					</div>
					</div>
					</td>
						
				</tr>
			<?php } ?>
			</tbody>
        </table>
		<a href="?do=add" class="btn btn-primary btn-lg btn-block">Add new user</a>
		</div><!--/.row-->