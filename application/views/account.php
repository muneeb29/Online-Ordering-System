<div>
<div class="container bg-primary text-center rounded my-3">
		<h1>Account Details</h1>
	</div>



	<?php
$heading = $this->input->cookie('ID',TRUE);
echo <<<_END
<html>
<head>
	<h1 class="text-capitalize">User Details</h1>
</head>
<body>
<table cellpadding="4" cellspacing="2" border="1" id="table">
	<tr>
		<th>Name</th>
	</tr>
_END;


	foreach ($details as $items) {
		echo 
		"<tr>".
		"<td>".''.$items->firstname.''."</td>".
		"<tr>".
		"<td>".''.$items->surname.''."</td>".
		"<tr>".
		"<td>".''.$items->firstname.''."</td>".
		"<tr>".
		"<td>".''.$items->address.''."</td>".
		"<tr>".
		"<td>".''.$items->telephone.''."</td>".
		"<tr>".
		"<td>".''.$items->email.''."</td>".
		"<tr>".
		"<td>".''.$items->username.''."</td>".
		"<tr>";
	
	  }

echo "</table></body></html>";

?>

</div>
