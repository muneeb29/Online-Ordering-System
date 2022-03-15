<html>
	<div>
		<div class="container my-3">
			<div class="row">
				<div class="col">
					<form action="Menu" method="POST">
					<select name="dropType" id="">
						<option value="" disabled selected>Select One</option>
						<option value="starter">Starters</option>
						<option value="main">Main Course</option>
						<option value="dessert">Dessert</option>
						<option value="drinks">Drinks</option>
					</select>
					<input type="submit" value="Search">
				</form>
				</div>

				<div class="col text-end">
					<form action="Menu" method="POST">
						<input type="text" placeholder="Search Menu" name="searchMenu" />
						<input type="Submit" value="Search" />
					</form>
				</div>
			</div>
		</div>

		<div class="container bg-primary rounded text-center my-1">
			<h1>Menu</h1>
		</div>

		<div class="container bg-">

<?php
$heading = $this->input->cookie('ID',TRUE);
echo <<<_END
<html>
<head>
	<h1 class="text-capitalize">$heading</h1>
</head>
<body>
<table cellpadding="4" cellspacing="2" border="1" id="table">
	<tr>
		<th>Starters</th><th>Main</th> <th>Dessert</th> <th>Drinks</th> 
	</tr>
_END;

if($types != null){
	foreach ($types as $items) {
		echo 
		"<tr>".
		"<td>".''.$items->name.''."</td>".
		"<tr>";
	
	  }

}

else if($type != null){
	foreach ($type as $item) {
		echo 
		"<tr>".
		"<td>".''.$item->name.''."</td>".
		"<tr>";
	
	  }
}

else{
foreach ($starter as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
    "<tr>";

  }
  foreach ($main as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
    "<tr>";

  }
  foreach ($dessert as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
    "</tr>";

  }    

  foreach ($drinks as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
    "<tr>";

  }    
}





echo "</table></body></html>";

?>

			</div>
		</div>
	</div>
</html>
