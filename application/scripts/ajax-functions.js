$(document).on('click', '.mybtn', function(){
    $abc = $(this).attr('id');
    addToCart($abc);
});

$(document).on('change', '.dpd', function(){
    $ab = $(this).attr('id');
   
    var quantity = $('#quantity option:selected').val();
    alert(quantity);
});

function addToCart($abc){

    var addID = $abc;
    var quantity = $('#quantity').val();
    console.log("ID: " + addID + "Quantity: " + quantity);
                
            jQuery.ajax({
            type: "POST",
            url: "Menu/add",
            dataType: 'html',
            data: {addID: addID, quantity:quantity},
            success: function(res) 
            {
            alert("Added Item To Cart")      
            },
            error:function()
            {
            	
            }
            });
        
    }

$(document).ready(function() {
    addToCart();
});

