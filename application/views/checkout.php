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
             <th>Total</th>
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
                       <td><?php echo $type->total;?></td>
					   <td><?php echo $type->quantity;?></td>
                       <td><?php echo '<input type="number" name="qty" id="'.$type->menuid.'" placeholder="'.$type->quantity.'">'?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary quant" name="quant" value="Update"
                       data-price="'.$type->price.'"
                       data-menu_id="'.$type->menuid.'">'?></td>
                    </tr>

           <?php } ?>

		   <?php 
                foreach($total as $type){
                    $amount = $type->total;
                ?>
                    <tr>      
					<th>Total</th>
                       <td><?php echo $type->total;?></td>			   
                     </tr>

           <?php } ?>
		   </tbody>
</table>
</div>

<?php if($amount > 0) : ?>
<div class="d-grid col-6 mx-auto mb-2 my-2">
<a
				href="<?php echo base_url(); ?>index.php/payment"
				role="button"
				class="btn btn-primary btn-large"
				>Payment</a
			>
            </div>

<?php else : ?>
    <div class="d-grid col-6 mx-auto mb-2 my-2">
    <a		
				role="button"
				class="btn btn-primary btn-large"
                title="Cart Is Empty"
                onclick="empty()"
				>Payment</a
			>
            </div>        
    <?php endif;?>

</div>
</html>