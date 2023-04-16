
$(document).ready(function(){
  
    // Load to count item in cart 
     loadcart();
   // Load to count item in Wishlist
     loadwishlist();
   // Load to count item in cart
     function loadcart(){
  
         $.ajax({ 
            method:'GET',
            url:'/load-cart-data',
            success:function(response){
           if(response.count == 0) {
            $('.countcart').html(''); 
           }else{
            $('.countcart').html(`<span class="pro-count blue  countcart">${response.count}</span>`);
           }
            }   
         });  // Load to count item in cart  
          
          
     }


     // Load to count item in wishlist
     function loadwishlist(){

        $.ajax({ 
            method:'GET',
            url:'/load-wishlist-data',
            success:function(response){

     if(response.count == 0){
      $('.countwishlist').html('');
     }else{
        $('.countwishlist').html(`<span class="pro-count blue  countwishlist">${response.count}</span>`);
    }
            }   
         }); // Load to count item in wishlist
     }

});
