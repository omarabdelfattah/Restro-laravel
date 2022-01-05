$(document).ready(function(){

    $("body").niceScroll();
    $(".floating_cart").niceScroll();
    

    $('.count').prop('disabled', true);
       $(document).on('click','.plus',function(){
        $('.count').val(parseInt($('.count').val()) + 1 );
    });
    $(document).on('click','.minus',function(){
        $('.count').val(parseInt($('.count').val()) - 1 );
            if ($('.count').val() == 0) {
                $('.count').val(1);
            }
        });
        $(".spinner").each(function() {
            console.log(1);
            $(this).inputSpinner();
          });
 });

 $("#open_cart").on("click",function(){
    $(".floating_cart").toggle();
 });
