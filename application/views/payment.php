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
		
		<div class="flex-column mb-2">
		<div class="col-6 form-select-md">
		<p class="text mb-2" >Expiry Date</p>
			<select name = "month">
               <option value = "Month">Month</option>
               <option value = "01">01</option>
			   <option value = "02">02</option>
			   <option value = "03">03</option>
			   <option value = "04">04</option>
			   <option value = "05">05</option>
			   <option value = "06">06</option>
			   <option value = "07">07</option>
			   <option value = "08">08</option>
			   <option value = "09">09</option>
			   <option value = "10">10</option>
			   <option value = "11">11</option>
			   <option value = "12">12</option>
			   </select>

			    <select name = "year">
                    <option value="Year"> Year</option>
					<option value="2022"> 2022</option>
					<option value="2023"> 2023</option>
					<option value="2024"> 2024</option>
					<option value="2025"> 2025</option>
					<option value="2026"> 2026</option>
					<option value="2027"> 2027</option>
                    <option value="2028"> 2028</option>
                </select>
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