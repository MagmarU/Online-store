$('.price').slider({
    min: 0,
    max: 5000,
    values: [2000,3000],
    range: true,
    animate: 'fast',
    slide: function(event, ui) {
        $('.price-slider-left').val( ui.values[0] );
        $('.price-slider-right').val( ui.values[1] );
    }
});

$('.price-slider-left').val( $('.price').slider('values', 0));
$('.price-slider-right').val( $('.price').slider('values', 1));
$('.price-slider input').change( function() {
    let input_left = $('.price-slider-left').val().replace(/[^0-9]/g, ''),
    opt_left = $('.price').slider('option', 'min'),
    where_right = $(".price").slider("values", 1),
    input_right = $(".price-slider-right").val().replace(/[^0-9]/g, ''),    
    opt_right = $(".price").slider("option", "max"),
    where_left = $(".price").slider("values", 0);

    if (input_left > where_right) { 
        input_left = where_right; 
    }
    if (input_left < opt_left) {
        input_left = opt_left; 
    }
    if (input_left == "") {
    input_left = 0;    
    }        
    if (input_right < where_left) { 
        input_right = where_left; 
    }
    if (input_right > opt_right) {
        input_right = opt_right; 
    }
    if (input_right == "") {
    input_right = 0;    
    }    
    $(".price-slider-left").val(input_left); 
    $(".price-slider-right").val(input_right); 
    if (input_left != where_left) {
        $(".price").slider("values", 0, input_left);
    }
    if (input_right != where_right) {
        $(".price").slider("values", 1, input_right);
    }
});