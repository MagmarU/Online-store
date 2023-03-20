$(document).ready(function() {
    
    $('.select-css').focus( function(event) {
        if( document.body.querySelector('.select-css').childElementCount === 1){
            $.ajax({
                type: 'GET',
                url: 'select_field_handler.php',
                
            }).done( function(response) {
                $(event.target).append( response );
            });
        }
        
    });

    let categoriesBlock = null;
    let formBlock = null;
    $('.select-css').change(function(event) {
        
        if( categoriesBlock ) {
            categoriesBlock.hidden = true; 
            formBlock.removeAttribute('name');
            categoriesBlock = null;
            formBlock = null;
        }

        categoriesBlock = document.body.querySelector(`.adding>div[name= '${this.value}']`);
        formBlock = categoriesBlock.querySelector('form');
        if( categoriesBlock ) categoriesBlock.hidden = false; formBlock.setAttribute('id', 'form');
        
    });
        
    let item_name_input = document.body.querySelector(`input[name = 'item_Name']`);
    let item_article_input = document.body.querySelector(`input[name = 'item_Article']`);
    let item_category_select = document.body.querySelector(`select[name = 'item_Category']`);
    let item_price = document.body.querySelector(`input[name='item_Price']`);
    let item_image = document.body.querySelector(`input[name='item_Image']`);
    
    $('form').submit(function(event) {
        event.preventDefault();
        item_image = item_image.files[0];
        let reader = new FileReader();
        let img;
        let p = new Promise(resolve => {
            reader.addEventListener( 'load', () => {
                img = reader.result;
                resolve(img);
            } );
            reader.readAsDataURL(item_image);

            // console.log( reader.readAsDataURL(item_image) );
        });
        p.then( imgUrl => {

             let item = new FormData(this);
            item = Object.fromEntries(item);
            let item_properties = {
                name: item_name_input.value,
                article: item_article_input.value, 
                img: imgUrl,
                item_category: item_category_select.selectedOptions[0].getAttribute('id'),
                description: $(this).serialize(),
                price: item_price.value,
            };
            $.ajax({
                method: 'POST',
                url: 'item_adding_handler.php',
                data: item_properties,
            }).done( function(result) {
                console.log( result );
            } )
        } );

       
        

        
    });
    

});