<html>
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		rel="stylesheet"
	/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<body>
		<div class="container rounded text-center my-3">
			<h1>Online Food Ordering</h1>
		</div>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<div class="container-fluid">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Home"
							>Home</a
						>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>index.php/Menu"
							>Menu</a
						>
					</li>
					<li class="nav-item">
						<a
							class="nav-link"
							href="<?php echo base_url(); ?>index.php/Contact"
							>Contact Us</a
						>
					</li>

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
						<div class="dropdown-menu">
							<a href="<?php echo base_url(); ?>index.php/Register" class="dropdown-item">Sign Up</a>
							<a href="<?php echo base_url(); ?>index.php/Login" class="dropdown-item">Login</a>
							<a href="<?php echo base_url(); ?>index.php/Login/Logout" class="dropdown-item">Log Out</a>
							<div class="dropdown-divider"></div>
							<a href="<?php echo base_url(); ?>index.php/Account" class="dropdown-item">View Account</a>
						</div>
					</li>

					<li class="nav-item">
						<a
							class="nav-link"
							href="<?php echo base_url(); ?>index.php/Checkout"
							>Checkout</a
						>
					</li>
				</ul>
			</div>
		</nav>
	</body>
</html>
