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



$(document).ready(function() {
    addToCart();
});