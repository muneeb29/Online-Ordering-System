<html>
<div class="text-center my-3">
    <h1>Payment Processed</h1>

    <h4 class="my-4">Your Order Number Is:</h4>

    <?php echo"<h4>$order</h4>";?>

    <h6 class="my-3 mb-3">Thank You For Using This Ordering System</h6>
	<h6 class="my-3 mb-3">Please Remember This Number</h6>

    <div class="d-grid col-6 mx-auto mb-2 my-3">


			<form action="paid"  method="POST">
				<input type="submit" name="next" value="Return To Home Page" style="width: 750px" class="btn btn-primary mb-4">
			</form>
		</div>

</div>
</html>