<html>
	<div>
		<div
			class="container bg-white border-1 shadow rounded text-center my-4 py-1"
		>
			<h1>Dashboard</h1>
		</div>

		<?php
		$heading = $this->input->cookie('ID',TRUE);
		echo <<<_END
		<html>
		<body>
		_END;
			foreach ($menu as $items) {
				echo 	
				'<div class="container">',

				'<form action="Account" method="POST">',
				'<div>',
				''.$items->name.'',
				''.$items->price.'',
				''.$items->quantity.'',
				''.$items->type.'',
				'</div>',
		
				'</form>',
				'</div>';	
			  }
		
		echo "</body></html>";
		
		?>
	</div>
</html>
