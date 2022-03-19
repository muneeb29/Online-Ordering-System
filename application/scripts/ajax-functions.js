$(document).on('click', '.mybtn', function(){
    $abc = $(this).attr('id');
    addToCart($abc);
});

function addToCart($abc){

    var addID = $abc;
    var quantity = $('#quantity').val();
    console.log(addID);
    console.log(quantity);
                
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

