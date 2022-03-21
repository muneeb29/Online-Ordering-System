<html>
<div>
<div class="container bg-white border-1 shadow rounded text-center my-4 py-1">
		<h1>Checkout</h1>
	</div>
<div>
<table class="mx-auto" cellpadding="4" cellspacing="2" border="1" id="table">
    <thead>
         <tr>
             <th>Item</th>
             <th>Price</th>
             <th>Quantity</th>
         </tr>
     </thead>
     <tbody>
     <?php 
                foreach($order as $type){
                ?>
                    <tr>
                       <td><?php echo $type->name;?></td>
                       <td><?php echo $type->price;?></td>
					   <td><?php echo $type->quantity;?></td>
                     </tr>

           <?php } ?>

		   <?php 
                foreach($total as $type){
                ?>
                    <tr>      
					<th>Total</th>
                       <td><?php echo $type->price;?></td>			   
                     </tr>

           <?php } ?>
		   </tbody>
</table>
</div>

<div class="d-grid col-6 mx-auto mb-2 my-2">
<a
				href="<?php echo base_url(); ?>index.php/payment"
				role="button"
				class="btn btn-primary btn-large"
				>Payment</a
			>
</div>

</div>
</html>