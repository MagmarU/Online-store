export function cartButtonHandler() {
    let btns = document.body.querySelectorAll('.inCart');
    for( let btn of btns ) {
        btn.addEventListener( 'click', function(event) {
            // addToCart( event.target.dataset.id );
            cart.add(event.target.dataset.id);
        } );
    }
}

import {Cart} from './cart_module.js';

// let user = {
//     id: 1,
// }

// let cart1 = new Cart(user);

// console.log( cart1.onLoad() );

let cart;

$.ajax({
    method: 'POST',
    url: '../authorization/login.php',
    data:{
        action: 'checkStatus',
    }
}).done( function( response ){
    cart = new Cart(JSON.parse(response));
    cart.remove(6);
    // cart.onLoad();
} );


// let cart = {};
// function addToCart( itemId ) {
//     if( JSON.parse( localStorage.getItem('cart') ) ) {
//         cart = JSON.parse( localStorage.getItem('cart') );
//     }
//     if( cart[itemId] == undefined ) {
//         cart[itemId] = 1;
//     } else {
//         cart[itemId]++;
//     }
//     localStorage.setItem('cart', JSON.stringify(cart));
// }
