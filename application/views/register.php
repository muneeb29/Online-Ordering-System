<div>

<div class="container bg-white border-1 shadow rounded text-center my-4 py-1">
		<h1>Sign Up</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-5 mx-auto">
				<div class="border-1 shadow rounded my-5">
					<div class="p-5">
				<div class="text-center">
					<h4 class="mb-4 fs-4">Sign Up</h4>
				</div>
				<form
					action="register"
					method="POST"
				>
				<div class="form-floating mb-3">
					<input
						type="text"
						class="form-control"
						placeholder="firstname"
						name="firstname"
						minlength="3"
						maxlength="10"
						required
						/>
						<label for="firstname">Firstname: </label/>
				</div>

				<div class="form-floating mb-3">
					<input
						type="text"
						class="form-control"
						placeholder="surname"
						name="surname"
						minlength="3"
						maxlength="10"
						required
						/>
						<label for="surname">Surname: </label/>
				</div>


				<div class="form-floating mb-3">
					<input
						type="text"
						class="form-control"
						placeholder="address"
						name="address"
						minlength="4"
						maxlength="25"
						required
						/>
						<label for="address">Address: </label/>
				</div>

				<div class="form-floating mb-3">
					<input
						type="tel"
						class="form-control"
						placeholder="telephone"
						name="telephone"
						minlength="11"
						maxlength="13"
						required
						/>
						<label for="telephone">Telephone: </label/>
				</div>

				<div class="form-floating mb-3">
					<input
						type="email"
						class="form-control"
						placeholder="email"
						name="email"
						minlength="3"
						required
						/>
						<label for="email">Email: </label/>
				</div>

				<div class="form-floating mb-3">
					<input
						type="text"
						class="form-control"
						placeholder="Username"
						name="username"
						minlength="3"
						maxlength="9"
						required
						/>
						<label for="username">Username: </label/>
				</div>
				<div class="form-floating mb-3">
					<input
						type="password"
						class="form-control"
						placeholder="Password"
						name="password"
						minlength="4"
						maxlength="10"
						required
					/>
					<label for="password">Password: </label/>
					</div>

					<div class="d-grid">
					<input type="submit" value="Register" name="submit" class="btn btn-primary" />
				</div>
				</form>
				</div>
			</div>
		</div>
			</div>
		</div>
</div>
