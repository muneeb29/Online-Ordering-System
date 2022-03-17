<div>
<div class="container my-3">
	<div class="row">
		<div class="col">
			<form action="Menu" method="POST">
				<div class="input-group mb-3">
					<select name="dropType" id="" class="form-select-sm">
						<option value="" disabled selected>Select One</option>
						<option value="starter">Starters</option>
						<option value="main">Main Course</option>
						<option value="dessert">Dessert</option>
						<option value="drinks">Drinks</option>
					</select>
					<input type="submit" value="Search" class="btn btn-primary" />
				</div>
			</form>
		</div>

		<div class="col-auto text-end">
			<form action="Menu" method="POST">
				<div class="input-group mb-3">
					<input
						type="text"
						placeholder="Search Menu"
						name="searchMenu"
						class="form-control"
					/>
					<input type="Submit" value="Search" class="btn btn-primary" />
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container bg-white border-1 shadow rounded text-center py-1 mb-2">
	<h1>Menu</h1>
</div>
</div>
