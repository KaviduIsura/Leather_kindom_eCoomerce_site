$(document).ready(function (){
  
  $('.increment-btn').click(function(e){
    e.preventDefault();

    var qty=$(this).closest('.product_data').find('.input-qty').val();
    
    var value=parseInt(qty,10);
    value= isNaN(value)? 0:value;

    if(value<10){

      value++;
      var qty=$(this).closest('.product_data').find('.input-qty').val(value);
    }
  });

  $('.decrement-btn').click(function(e){
    e.preventDefault();

    var qty=$(this).closest('.product_data').find('.input-qty').val();
    
    var value=parseInt(qty,10);
    value= isNaN(value)? 0:value;

    if(value>1){

      value--;
      var qty=$(this).closest('.product_data').find('.input-qty').val(value);
    }
  });

  $('.addToCartbtn').click(function(e){
    e.preventDefault();
    
    var qty=$(this).closest('.product_data').find('.input-qty').val();
    var prod_id=$(this).val();
    var size = $('#shoesize').val();
    
    $.ajax({
      method:"POST",
      url:"function/handlecart.php",
      data:{
        "prod_id":prod_id,
        "prod_qty":qty,
        "size":size,
        "scope":"add"
      },
      success: function (response)
      {
        if(response==201){
          
          alertify.success("Product added to cart");
        }
        else if(response=="existing"){
        
          alertify.success("Product already in cart");
        }
        else if(response==401){
        
          alertify.success("Login to Continue");
        }
        else if(response==500){
        
          alertify.success("Somthing went wrong");
        }
        
      }

  });

  });

  $(document).on('click','.updateQty',function(){
    
    var qty=$(this).closest('.product_data').find('.input-qty').val();
    var prod_id=$(this).closest('.product_data').find('.prodId').val();
    
    $.ajax({
      method:"POST",
      url:"function/handlecart.php",
      data:{
        "prod_id":prod_id,
        "prod_qty":qty,
        "scope":"update"
      },
      success: function (response){

        //alert(response);
      }
    });
  });

  $(document).on('click','.deleteItem',function(){
    var cart_id= $(this).val();
    //alert(cart_id);

    $.ajax({
      method:"POST",
      url:"function/handlecart.php",
      data:{
        "cart_id":cart_id,
        "scope":"delete"
      },
      success: function (response){

        if(response==200){
          
          alertify.success("Item Deleted Successfully");
          $('#mycart').load(location.href + " #mycart");
        }else{
          alertify.success(response);
        }
        
      }
    });
  });
});