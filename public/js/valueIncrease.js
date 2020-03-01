$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });

    $('.min_question-right-plus').click(function (e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var min_question = parseInt($('#min_question').val());

        // If is not undefined

        $('#min_question').val(min_question + 1);


        // Increment

    });

    $('.min_question-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var min_question = parseInt($('#min_question').val());

        // If is not undefined

        // Increment
        if (min_question > 0) {
            $('#min_question').val(min_question - 1);
        }
    });
});

$(document).ready(function () {

        $("#successmsg").fadeOut(6000);
        //alert("helo");

});

