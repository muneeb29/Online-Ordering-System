<html>
	<div>
		<div class="container bg-">
		<form method="post" action="menu"> 

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
		<th>Starters</th> <th>Price</th>  <th>Quantity</th>  <th>Main</th> <th>Dessert</th> <th>Drinks</th> 
	</tr>
_END;

if($types != null){
	foreach ($types as $items) {
		echo 
		"<tr>".
		"<td>".''.$items->name.''."</td>".
		"<td>".''.$items->price.''."</td>".
		"<tr>";
	
	  }

}

else if($type != null){
	foreach ($type as $item) {
		echo 
		"<tr>".
		"<td>".''.$item->name.''."</td>".
		"<td>".''.$item->price.''."</td>".
		"<tr>";
	
	  }
}

else{
foreach ($starter as $allitems) {
	$menuid = $allitems->menuid;
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
	"<td>".''.$allitems->price.''."</td>".
	"<td>".'<select name="quantity">'
	.'<option value="" disabled="disabled" selected="selected"> '.'</option>'
	.'<option value="1">1</option>'
	.'<option value="2">2</option>'
	.'<option value="3">3</option>'
	.'<option value="4">4</option>'
	.'</select>'."<br/>"."</td>".
	"<td>".'<select name="addc">'
	.'<option value="" disabled="disabled" selected="selected"> '.'</option>'
	.'<option value='."$menuid".'>'."$menuid".'</option>'.
	"<td>".'<input type="submit" class="btn btn-primary" name="add" value="Add">'."</td>".
    "<tr>";

  }
  foreach ($main as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
	"<td>".''.$allitems->price.''."</td>".
    "<tr>";

  }
  foreach ($dessert as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
	"<td>".''.$allitems->price.''."</td>".
    "</tr>";

  }    

  foreach ($drinks as $allitems) {
    echo 
    "<tr>".
    "<td>".''.$allitems->name.''."</td>".
	"<td>".''.$allitems->price.''."</td>".
    "<tr>";

  }    
}


echo "</table></body></html>";

?>

			</div>
		</div>
	</div>
	<input type="submit" name="adds" value="Add">
</form>
</html>
