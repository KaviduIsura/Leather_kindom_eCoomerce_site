$(document).ready(function (){
 
  $('.product_delete_btn').click(function(e){
    e.preventDefault();
    var id=$(this).val();
    //alert(id);

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
       $.ajax({
          type:"POST",
          url:"code.php",
          data:{
            'product_id':id,
            'product_delete_btn': true
          },
      
        success:function(response){
          console.log(response);
          if(response==200){
            swal("Success!", "Product Deleted Successfully!", "success");
            $("body").load(window.location.href);
          }
          else if(response==500){
            swal("Error!", "Something went wrong!", "error");
          }

        }

       });
      } 
    });

    
  });

  $('.category_delete_btn').click(function(e){
    e.preventDefault();
    var id=$(this).val();
    //alert(id);

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
       $.ajax({
          type:"POST",
          url:"code.php",
          data:{
            'category_id':id,
            'category_delete_btn': true
          },
          
        success:function(response){
          console.log(response);
          if(response==200){
            swal("Success!", "Category Deleted Successfully!", "success");
            $("#category_table").load(location.href + " #category_table");
          }
          else if(response==500){
            swal("Error!", "Something went wrong!", "error");
          }

        }

       });
      } 
    });

    
  });
  
});