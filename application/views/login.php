<div>
	<div class="container bg-primary text-center rounded my-3">
		<h1>Login</h1>
	</div>

	<div>
		<form action="<?php echo base_url(); ?>index.php/Login" method="POST">
			<input type="text" placeholder="Username" name="username" id="username" />
			<input type="text" placeholder="Password" name="password" id="password" />

			<input type="submit" value="Login" />
		</form>
	</div>
</div>
