<div>
	
<div class="container bg-white border-1 shadow rounded text-center my-4 py-1">
		<h1>Login</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-5 mx-auto">
				<div class="border-1 shadow rounded my-5">
					<div class="p-5">
				<div class="text-center">
					<h4 class="mb-4 fs-4">Login</h4>
				</div>
				<form
					action="<?php echo base_url(); ?>index.php/Login/login"
					method="POST"
				>
				<div class="form-floating mb-3">
					<input
						type="text"
						class="form-control"
						placeholder="Username"
						name="username"
						/>
						<label for="username">Username: </label/>
				</div>
				<div class="form-floating mb-3">
					<input
						type="password"
						class="form-control"
						placeholder="Password"
						name="password"
					/>
					<label for="password">Password: </label/>
					</div>

					<div class="d-grid">
					<input type="submit" value="Login" class="btn btn-primary" />
				</div>
				</form>
				</div>
			</div>
		</div>
			</div>
		</div>
	</div>



