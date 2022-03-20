<div class="text-center"> 
<table class="mx-auto" cellpadding="4" cellspacing="2" border="1" id="table">
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
     if($types != null) :
                foreach($types as $type){
                ?>
                    <tr>
                       <td><?php echo $type->name;?></td>
                       <td><?php echo $type->price;?></td>
                       <td><?php  echo '<input type="text" name="quantity" class="form-control quantity" id="'.$type->menuid.'">';?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary addCart" name="addCart" value="Add"
                       data-name="'.$type->name.'"
                       data-price="'.$type->price.'"
                       data-menu_id="'.$type->menuid.'">'?></td>

                     </tr>

           <?php } ?>
                

           <?php 
           elseif($type != null) :
                foreach($type as $items){
                ?>
                    <tr>
                       <td><?php echo $items->name;?></td>
                       <td><?php echo $items->price;?></td>
                       <td><?php  echo '<input type="text" name="quantity" class="form-control quantity" id="'.$items->menuid.'">';?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary addCart" name="addCart" value="Add"
                       data-name="'.$items->name.'"
                       data-price="'.$items->price.'"
                       data-menu_id="'.$items->menuid.'">'?></td>

                     </tr>
           <?php } ?>



         <?php 
         else : 
                foreach($starter as $starter){
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

           <?php 
                foreach($main as $mains){
                ?>
                    <tr>
                       <td><?php echo $mains->name;?></td>
                       <td><?php echo $mains->price;?></td>
                       <td><?php  echo '<input type="text" name="quantity" class="form-control quantity" id="'.$mains->menuid.'">';?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary addCart" name="addCart" value="Add"
                       data-name="'.$mains->name.'"
                       data-price="'.$mains->price.'"
                       data-menu_id="'.$mains->menuid.'">'?></td>

                     </tr>
           <?php } ?>

           <?php 
                foreach($dessert as $desserts){
                ?>
                    <tr>
                       <td><?php echo $desserts->name;?></td>
                       <td><?php echo $desserts->price;?></td>
                       <td><?php  echo '<input type="text" name="quantity" class="form-control quantity" id="'.$desserts->menuid.'">';?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary addCart" name="addCart" value="Add"
                       data-name="'.$desserts->name.'"
                       data-price="'.$desserts->price.'"
                       data-menu_id="'.$desserts->menuid.'">'?></td>

                     </tr>
           <?php } ?>

           <?php 
                foreach($drinks as $drink){
                ?>
                    <tr>
                       <td><?php echo $drink->name;?></td>
                       <td><?php echo $drink->price;?></td>
                       <td><?php  echo '<input type="text" name="quantity" class="form-control quantity" id="'.$drink->menuid.'">';?></td>
                       <td><?php echo '<input type="button" class="btn btn-primary addCart" name="addCart" value="Add"
                       data-name="'.$drink->name.'"
                       data-price="'.$drink->price.'"
                       data-menu_id="'.$drink->menuid.'">'?></td>

                     </tr>
                 
           <?php } ?>
           <?php endif;?>
     </tbody>

</table>
</div>