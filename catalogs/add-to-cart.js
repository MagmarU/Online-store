export function cartButtonHandler() {
    let btns = document.body.querySelectorAll('.inCart');
    for( let btn of btns ) {
        btn.addEventListener( 'click', function(event) {
            addToCart( event.target.dataset.id );
        } );
    }
}

let cart = {};
function addToCart( itemId ) {
    if( JSON.parse( localStorage.getItem('cart') ) ) {
        cart = JSON.parse( localStorage.getItem('cart') );
    }
    if( cart[itemId] == undefined ) {
        cart[itemId] = 1;
    } else {
        cart[itemId]++;
    }
    localStorage.setItem('cart', JSON.stringify(cart));
}
