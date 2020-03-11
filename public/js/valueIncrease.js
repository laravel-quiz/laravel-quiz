$(document).ready(function(){

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

    $('.image_ratio-right-plus').click(function (e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var image_ratio = parseInt($('#image_ratio').val());

        // If is not undefined

        $('#image_ratio').val(image_ratio + 1);


        // Increment

    });

    $('.image_ratio-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var image_ratio = parseInt($('#image_ratio').val());

        // If is not undefined

        // Increment
        if (image_ratio > 0) {
            $('#image_ratio').val(min_question - 1);
        }
    });
});

$(document).ready(function () {

        $("#successmsg").fadeOut(6000);
        //alert("helo");

});

