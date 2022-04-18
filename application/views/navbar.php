<html>

	<head>
	<meta charset="UTF-8">
  	<meta name="description" content="Online Ordering System">
  	<meta name="keywords" content="Food, Starters, Drinks">
  	<meta name="author" content="Muneeb Khalid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		rel="stylesheet"
	/>
	<link rel="stylesheet" href="<?php echo base_url('application/styles/stylesheet.css')?>"/>
	</head>	

	<body>
		<div class="row">
			<div class="col rounded text-center my-3 bg-light border">
				<h1 class="">Online Food Ordering</h1>
			</div>
		</div>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<div class="container-fluid">
				<ul class="navbar-nav">
					<li class="navbar-brand">
						<img
						src="<?php echo base_url(); ?>application/images/logo.svg"
							class="img-fluid"
							alt="Icon"
							width="35"
							height="30"
						/>
					</li>

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
						<a
							href="#"
							class="nav-link dropdown-toggle"
							data-bs-toggle="dropdown"
							>Account</a
						>
						<div class="dropdown-menu">
							<?php 

							if($this->session->userdata('user')) : ?>
							<a
								href="<?php echo base_url(); ?>index.php/Login/Logout"
								class="dropdown-item"
								>Log Out</a
							>
							<div class="dropdown-divider"></div>
							<a
								href="<?php echo base_url(); ?>index.php/Account"
								class="dropdown-item"
								>View Account</a
							>

							<?php
							elseif($this->session->userdata('admin')) : ?>
							<a
								href="<?php echo base_url(); ?>index.php/Login/adminlogout"
								class="dropdown-item"
								>Log Out</a
							>
							<div class="dropdown-divider"></div>
							<a
								href="<?php echo base_url(); ?>index.php/Dashboard"
								class="dropdown-item"
								>Dashboard</a
							>

							<?php else : ?>

							<a
								href="<?php echo base_url(); ?>index.php/Register"
								class="dropdown-item"
								>Sign Up</a
							>
							<a
								href="<?php echo base_url(); ?>index.php/Login"
								class="dropdown-item"
								>Login</a
							>
						</div>
					</li>

					<?php endif;?>

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

	<footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo base_url('application/scripts/ajax-functions.js');?>"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	</footer>
</html>
