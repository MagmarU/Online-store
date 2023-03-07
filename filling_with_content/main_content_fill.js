class Item {
    constructor(){
        this.categories = {};
    }
    addCategory(categoryName) {
        this.categories[categoryName] = [];
    }
    addItem( categoryName, item ) {
        this.categories[categoryName].push( item );
    }
}
// let items = new Item();



// ------------------------------------------------------------------------------
// $.ajax({
//     method: 'GET',
//     url: "../filling_with_content/filling_handler.php",
//     data: {
//         action: 'getCategories',
//     },
// }).done( function(result){
//     result = JSON.parse( result );
//     for( let elem of result ) {
//         items.addCategory(elem[0]);
//     }
//     $.ajax({
//         method: 'GET',
//         url: "../filling_with_content/filling_handler.php",
//         data: {
//             action: 'getItems',
//         },
//     }).done(function (result){
//         result = JSON.parse( result );
//         for( let elem of result ) {

//             items.addItem( elem.category, elem );
//         }
//     });
// });
// ------------------------------------------------------------------------------
let items;
$.ajax({
    method: 'GET',
    url: "../filling_with_content/filling_handler.php",
    data: {
        action: 'getItems',
    },
}).done(function (result){
    items = JSON.parse( result );
    for( let elem of items ) {
        addItem( elem );
    }
    // console.log( items );
});


let container = document.querySelector('.container');

function addItem( item ) {
    let ul = container.querySelector(`div[name="${item.category}"] .product-tabs>ul`);
    let productCard = document.createElement('li');
    productCard.innerHTML = serializeItem( item );
    ul.append( productCard );
}
function serializeItem( item ) {
    let html = `
    <div class="product">
    <div class="product-image">
        <img src="./img/errfolder.jpg">
    </div>
    <span>${item.name}</span>
    <span
        style="font-size: 1.2rem; font-weight: 700; color: #D10024;">${item.price} руб.</span>
    </div>
    `;
    return html;
}