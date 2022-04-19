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

     <?php 
     if($orders != null) :
                foreach($orders as $row){
                ?>

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


        <?php 
         else : 
                ?>

        <?php endif;?>

        </tbody>
</table>
 </div>           
</div>
</html>