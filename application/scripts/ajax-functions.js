function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

function empty(){
    alert("Cart Is Empty")
}

function addToCart(){
$('.addCart').click(function(){
    var name = $(this).data("name");
    var price = $(this).data("price");
    var menuid = $(this).data("menu_id");
    var quantity = $('#' + menuid).val();

    if(quantity != '' && quantity > 0)
    {
     $.ajax({
      url: "Menu/add",
      method:"POST",
      data:{name:name, price:price, menuid:menuid, quantity:quantity},
      success:function(data)
      {
       alert("Item Added to Cart");
      }
     });
    }
    else
    {
     alert("Please Enter Quantity");
    } 
});
}

function updateCart(){
    $('.quant').click(function(){
        var menuid = $(this).data("menu_id");
        var price = $(this).data("price");
        var quantity = $('#' + menuid).val();
    
        if(quantity != '' && quantity > 0)
        {
         $.ajax({
          url: "Checkout/updateQuantity",
          method:"POST",
          data:{menuid:menuid, quantity:quantity, price:price},
          success:function(data)
          {
           alert("Item Updated");
           location.reload(); 
          }
         });
        }
        else
        {
         alert("Please  Quantity");
        } 
    });
    }

    function deleteCart(){
        $('.dlt').click(function(){
            var mnuid = $(this).data("menu_id");
            var order_menuid = $(this).data("order_menuid");

            console.log(order_menuid)

             $.ajax({
              url: "Checkout/deleteItem",
              method:"POST",
              data:{order_menuid:order_menuid},
              success:function(data)
              {
               alert("Item Deleted");
                 location.reload(); 
              }
             });
            

        });
        }



$(document).ready(function() {
    addToCart();
    updateCart();
    deleteCart();
});