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
                       
                       <td>
                       <?php
                       echo
                      ' <select id="'.$starter->quantity.'" class="dpd">'
                       ?>
                         <option disabled selected value="">Select Quantity</option>
                      <?php 
                      for($x = 0; $x <= $quantity; $x++){ 
                        echo '<option value="'.$x.'">'.$x.'</option>';
                      }
                      ?> </select></td> 



                       <td><?php echo '<input type="button" class="btn btn-primary mybtn" id="'.$starter->menuid.'" value="Add">'?></td>

                     </tr>
           <?php } ?>
     </tbody>

</table>