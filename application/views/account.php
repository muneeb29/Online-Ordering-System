<div>
<div class="container bg-white border-1 shadow rounded text-center my-4 py-1">
		<h1>Account Details</h1>
	</div>
	<?php
$heading = $this->input->cookie('ID',TRUE);
echo <<<_END
<html>
<body>
_END;
	foreach ($details as $items) {
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
		action="Account"
		method="POST"
	>',
		'<div class="form-floating mb-3">
		<input type="text" name="firstname" class="form-control" minlength="3"
		maxlength="10" placeholder ="'.$items->firstname.'">
		<label for="firstname">First Name: '.$items->firstname.'</label/>
		</div>',
		
		'<div class="form-floating mb-3">
		<input type="text" name="surname" class="form-control" minlength="3"
		maxlength="10" placeholder ="'.$items->surname.'">
		<label for="surname">Surname: '.$items->surname.'</label/>
		</div>',
		
		'<div class="form-floating mb-3">
		<input type="text" name="address" class="form-control" minlength="4"
		maxlength="25" placeholder ="'.$items->address.'">
		<label for="address">Address: '.$items->address.'</label/>
		</div>',

		'<div class="form-floating mb-3">
		<input type="tel" name="telephone" class="form-control" minlength="11"
		maxlength="13" placeholder ="'.$items->telephone.'">
		<label for="telephone">Telephone: '.$items->telephone.'</label/>
		</div>',
		
		'<div class="form-floating mb-3">
		<input type="email" name="email" class="form-control" minlength="3" placeholder ="'.$items->email.'">
		<label for="email">Email: '.$items->email.'</label/>
		</div>',
	

		'<div class="d-grid">
		<input type="submit" name="Update" value="Update" class="btn btn-primary mb-2">
		</div>',

		'</form>',
		'</div>',
		'</div>',
		'</div>',
		'</div>';	
	  }

echo "</table></body></html>";

?>
</div>
