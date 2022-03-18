<html>
	<div>
		<div
			class="container bg-white border-1 shadow rounded text-center my-4 py-1"
		>
			<h1>Dashboard</h1>
		</div>

		<div>
			<form action="dashboard" method="POST">
			<div>
				<input type="text" name="addName" placeholder="Name">
			</div>
			<div>
				<input type="text" name="addPrice" placeholder="Price">
			</div>

			<div>
				<input type="text" name="addQuantity" placeholder="Quantity">
			</div>
			<div>
				<input type="text" name="addType" placeholder="Type" class="mb-2">
			</div>
			<div>
				<input type="submit" value="Add" name="addItems" class="btn btn-primary">
			</div>
			</form>
		</div>

		<form action="dashboard" method="POST">
		<select class="" name="searchName"> 
			<option disabled selected value="">Select One</option>
            <?php 
            foreach($mnu as $row)
            { 
              echo 
			  '<option value="'.$row->name.'">'.$row->name.'</option>';
            }
            ?>
            </select>
			<input type="submit" name="selectName" value="Search" class="btn btn-primary">
			</form>

			<form action="dashboard" method="POST">
		<select class="" name="deleteItems"> 
			<option disabled selected value="">Select One</option>
            <?php 
            foreach($mnu as $row)
            { 
              echo 
			  '<option value="'.$row->name.'">'.$row->name.'</option>';
            }
            ?>
            </select>
			<input type="submit" name="deleteName" value="Delete" class="btn btn-primary">
			</form>

		<?php
		echo <<<_END
		<html>
		<body>
		_END;
			foreach ($menu as $items) {
				echo 	
				'<div class="container">',
				'<div class="row">',
				'<div class="col-lg-5 mx-auto">',
				'<div class="border-1 shadow rounded my-5">',
				'<div class="p-5">',
				'	<div class="text-center">
				<h4 class="mb-4 fs-4">Update Details</h4>
			</div>',
				'	<form
				action="dashboard"
				method="POST"
			>',
				'<div class="form-floating mb-3">
				<input type="text" name="updateName" class="form-control" placeholder ="'.$items->name.'">
				<label for="updateName">Name: '.$items->name.'</label/>
				</div>',
				
				'<div class="form-floating mb-3">
				<input type="text" name="updatePrice" class="form-control" placeholder ="'.$items->price.'">
				<label for="updatePrice">Price: '.$items->price.'</label/>
				</div>',
				
				'<div class="form-floating mb-3">
				<input type="text" name="updateQuantity" class="form-control" placeholder ="'.$items->quantity.'">
				<label for="updateQuantity">Quantity: '.$items->quantity.'</label/>
				</div>',
		
				'<div class="form-floating mb-3">
				<input type="text" name="updateType" class="form-control" placeholder ="'.$items->type.'">
				<label for="updateType">Type: '.$items->type.'</label/>
				</div>',
			
		
				'<div class="d-grid">
				<input type="submit" name="update" value="Update" class="btn btn-primary mb-2">
				</div>',
		
				'</form>',
				'</div>',
				'</div>',
				'</div>',
				'</div>';	
			  }
		
		echo "</body></html>";
		
		?>
	</div>
</html>
