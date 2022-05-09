<html>
	<div>
		<div
			class="container bg-white border-1 shadow rounded text-center my-4 py-1"
		>
			<h1>Dashboard</h1>
			<h4>Welcome To The Admin Dashboard</h4>
		</div>

		<div class="container bg-white text-center mb-2">
			
			<h4 id="timeDate"></h4>

		</div>


		<div class="container mx-auto">
			<div class="row">
			<div class="col">
			<button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#addItem" aria-expanded="false" >
				Add Items
			  </button>	
		</div>
		

			<div class="row my-2">
					<div class="col">
							<form action="dashboard" method="POST">
							<label for="ordName" class="mb-2">Select All Orders</label>
							<div class="input-group mb-3">
							<select class="form-select-sm" name="ordName"> 
								<option disabled selected value="">Select All Orders</option>
								 <?php 
								foreach($ord as $row)
								{ 
								  echo 
								  '<option value="'.$row->orderid.'">'.$row->orderid.'</option>';
								}
								?> 
								</select>
								<input type="submit" name="orderName" value="Select" class="btn btn-primary">
							</div>	
							</form>
						</div>	
						<div class="col">
							<div class="container mx-auto">
								<div class="row">
									<div class="col my-2">
										<form action="dashboard" method="POST">
										<label for="ordName" class="mb-2">Select Item To Update</label>
										<div class="input-group mb-3">
										<select class="form-select-sm" name="searchName"> 
											<option disabled selected value="">Select One</option>
											<?php 
											foreach($mnu as $row)
											{ 
											  echo 
											  '<option value="'.$row->name.'">'.$row->name.'</option>';
											}
											?>
											</select>
											<input type="submit" name="selectName" value="Update" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateItems">
										</div>	
										</form>
									</div>
				
									</div>
								</div>
							</div>
						</div>


					</div>		

				<div class="row">
				<div class="col">
				<form action="dashboard" method="POST">
					<label for="deleteItems" class="mb-2">Select Item To Delete</label>
					<div class="input-group mb-3">
					<select class="form-select-sm" name="deleteItems"> 
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
					</div>	
					</form>
					</div>
				

			<div class="col">
				<div class="container mx-auto">
					<div class="row">
						<div class="col my-2">
				<form action="dashboard" method="POST">
				<label for="orderedItems" class="mb-2">Select Orders To Manage</label>
					<div class="input-group mb-3">
					<select class="form-select-sm" name="orderedItems"> 
						<option disabled selected value="">Select Pending Orders</option>
						<?php 
						foreach($ordered as $row)
						{ 
						  echo 
						  '<option value="'.$row->orderid.'">'.$row->orderid.'</option>';
						}
						?>
						</select>
						<input type="submit" name="orderedName" value="Select" class="btn btn-primary">
					</div>	
					</form>
			</div>

		</div>
	</div>
</div>
		</div>
	


	<div class="collapse" id="addItem">
		<div class="container">
			<div class="row ">
			<div class="col-lg-5 mx-auto">
			<div class="border-1 shadow rounded my-5">
			<div class="p-5">
			<div class="text-center">
					<h4 class="mb-4 fs-4">Add Item</h4>
			</div>
			<form action="dashboard" method="POST">
			<div class="form-floating mb-3">	
				<input type="text" name="addName" minlength="3" maxlength="25" class="form-control" required placeholder="Name">
				<label for="addName">Name: </label/>
			</div>
			<div class="form-floating mb-3">
				<input type="text" name="addPrice" class="form-control" minlength="1" maxlength="5"required  placeholder="Price">
				<label for="addPrice">Price: </label/>
			</div>
			<div class="form-floating mb-3">
				<input type="number" name="addQuantity" class="form-control" min="1" max="100" required placeholder="Quantity">
				<label for="addQuantity">Quantity: </label/>
			</div>
			<div class="form-floating mb-3">
				<input type="text" name="addType" class="form-control" minlength="3" maxlength="10" required placeholder="Type" class="mb-2">
				<label for="addType">Type: </label/>
			</div>
			<div class="d-grid">
				<input type="submit" value="Add" name="addItems" class="btn btn-primary mb-2">
			</div>
			</form>
		</div>
		</div>
			</div>
	</div>
	</div>
	</div>

<div class="container">
		<?php
			foreach ($menu as $items) {
				echo 	
				'<div class="container">',
				'<div class="row">',
				'<div class="col-lg-5 mx-auto">',
				'<div class="border-1 shadow rounded my-5">',
				'<div class="p-5">',
				'	<div class="text-center">
				<h4 class="mb-4 fs-4">Update Item</h4>
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
				'</div>',
				'</div>';	
			  }
		
		 "</body></html>";
		
		?>
		</div>

	</div>
</html>
