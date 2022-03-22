<html>
<div>
<div class="container bg-white border-1 shadow rounded text-center my-4 py-1">
		<h1>Payment</h1>
	</div>
<div>
<form action="Payment" method="POST">
<div class="container">
	<div class="card px-5">
	<h5 class="mx-auto my-3">Payment Information</h5>
	<div class="row">
	
		<div class="col-11">
			<div class="flex-column">
			<p>Person Name</p>
			<input type="text" class="form-control mb-3" placeholder="Name" name="cardName">
			</div>
			</div>
		

		<div class="col-11">
			<div class="flex-column">
			<p class="text mb-2">Card Number</p>
			<input type="text" class="form-control mb-3" placeholder="Card Number" name="cardNumber">
			</div>
			</div>

		<div class="col-6">
			<div class="flex-column">
			<p class="text mb-2" >Type</p>
			<input type="text" class="form-control mb-3" placeholder="Card Type" name="cardType">
			</div>
			</div>	
		
		<div class="col-6">
			<div class="flex-column">
			<p class="text mb-2" >Expiry</p>
			<input type="text" class="form-control mb-3" placeholder="YYYY/MM/DD" name="expiry">
			</div>
			</div>
		
			<div class="col-6">
			<div class="flex-column">
			<p class="text mb-2">CSV</p>
			<input type="password" class="form-control mb-3" placeholder="***" name="csv">
			</div>
			</div>

		</div>
		<div class="row mx-auto">
			<div class="col mx-auto">
				<input type="submit" value="Pay" class="btn btn-primary btn-large mb-2" name="pay">
			</div>
		</div>
	</div>
	</form>
</div>
</div>
</html>