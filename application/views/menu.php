<table cellpadding="4" cellspacing="2" border="1" id="table">
    <thead>
         <tr>
             <th>Item</th>
             <th>Price</th>
             <th>Quantity</th>
             <th>MenuID</th>
         </tr>
     </thead>
     <tbody>
         <?php 
                foreach($starter as $starter){
                    $quantity = $starter->quantity;
                    $menuid = $starter->menuid;
                ?>
                    <tr>
                       <td><?php echo $starter->name;?></td>
                       <td><?php echo $starter->price;?></td>
                       <td><?php  echo '<input type="text" name="quantity" class="form-control quantity" id="'.$starter->menuid.'">';?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary addCart" name="addCart" value="Add"
                       data-name="'.$starter->name.'"
                       data-price="'.$starter->price.'"
                       data-menu_id="'.$starter->menuid.'">'?></td>

                     </tr>
           <?php } ?>
     </tbody>

</table>

