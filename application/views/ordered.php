<html>
<div>

 <div class="col">
 <table class="mx-auto table" style="width:60%" cellpadding="4" cellspacing="2" border="1" id="table">
    <thead>
         <tr>
             <th>Items</th>
             <th>Quantity</th>  
             <th>Total</th>       
         </tr>
     </thead>
     <tbody>
     <?php $num=0;?>
     <?php $tot=0;?>
     
     <?php 
                foreach($total as $row){
                    $tot = $row->total;
                }
                ?>


     <?php 
     if($orders != null) :
                foreach($orders as $row){
                ?>
       <?php $num =  $row->orderid;?>

        <div class="container">
            <div class="col">
            <tr>  
            <td> <?php echo $row->name;?></td> 
            <td>  <?php echo $row->quantity;?> </td>
            <td> <?php echo "£$row->total";?></td>
            </tr>
            </div>
        </div>

        <?php } ?>
       
        <tr>
        <th><?php echo"Order ID:  $num";?></th>
        </tr>
        <tr>
        <th><?php echo"Order Total:  £$tot";?></th>
        </tr>
        <tr>
            <th>
                <form action="dashboard" method="POST" class="d-grid mx-auto">
                <input type="submit" name="completeOrder" value="Mark Order As Complete" class="btn btn-primary">
                <input type="submit" name="cancelOrder" value="Cancel Order" class="btn btn-primary my-2">   
            </form>
            </th>
        </tr>

        <?php 
         else : 
                ?>

        <?php endif;?>

        </tbody>
</table>
 </div>           
</div>
</html>