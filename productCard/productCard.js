let item = JSON.parse( localStorage.getItem('items') )[window.location.hash.substring(1)];
let block = document.body.querySelector('.productCard_detailed');

import {cartButtonHandler} from '../catalogs/add-to-cart.js';


init( item, block )
    .then( cartButtonHandler() );




function init( item, block ) {
    return new Promise( resolve => {
        let html = `
            <div class="product_name"><span>${item.name}</span></div>
            <div class="product_main_content">
                <div class="product_img"><img src="${item.img}" alt=""></div>
                <div class="product_navigation">
                    <div class="product_price"><span>${item.price} ₽</span></div>
                    <div class="add_to_cart"><button class="inCart add_to_cart_btn catalogBtns" data-id="${item.ID}">В корзину</button></div>
                </div>
            </div>

            <div class="product_description_inner">
                <p>Характеристики</p>
                <ul>
                    ${objToHtml(item.description)}
                    
                </ul>
            </div>
        `;
        block.innerHTML += html;
        resolve();
    } );
}

function objToHtml( description ) {
    let html = '';
    for( let prop in description ) {
        html += `<li>${prop}: <span>${description[prop]}</span></li>`;
    }
    return html;
}

