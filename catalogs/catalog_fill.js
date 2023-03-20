import {cartButtonHandler} from './add-to-cart.js';
let page = document.body.querySelector('[data-page]');
let uniqueProp = new Set();
let filterBlock = document.body.querySelector(`div[name='filterWrap']`);



init( JSON.parse( localStorage.getItem('items') ) )
    .then( cartButtonHandler() );

function init(obj) {
    return new Promise( resolve => {
        for( let prop in obj ) {
            fillingForm( obj[prop] );
            unique( obj[prop] );
        }
        resolve();
    });
    // console.log( obj ); // десериализованные товары
}

function unique( item ) {

    if( item.category == page.dataset.page){
        for( let prop in item.description ) {
            if( !uniqueProp.has( prop ) ) {
                uniqueProp.add( prop );
                fillingFilterBox( item.description[prop], prop )
            }
        }
    }
    
}



function fillingFilterBox( content, title ) {
    let html = `
    <div>
        <input type="checkbox" value="${content}">
            <span>${content}</span>
    </div>        
    `;
    filterBlock.querySelector(`[data-title='${title}']`).innerHTML += html;
    return html;
    
}


function fillingForm( item ){
    return new Promise( resolve => {
        if( item.category == page.dataset.page ) {
            let html = `<div class="productModel br-btm br-rght">
                            <div class="product-image">
                                <img src="${item.img}" alt="">
                            </div>
                            <div class="productName">
                                <span><a href="../productCard/itemCard.html#${item.ID}">${item.name}</a></span>
                                <div class="description">
                                    <ul>
                                        ${objToHtml(item.description)}
                                    </ul>
                                </div>
                            </div>
                            <div class="productPrice">
                                <span>${item.price} ₽</span>
                                <button name = "add-to-cart" class="inCart catalogBtns" data-id="${item.ID}">В корзину</button>
                            </div>
                        </div>`;

            page.innerHTML += html;
        };
        resolve();
    } )
    
};

function objToHtml( description ) {
    let html = '';
    for( let prop in description ) {
        html += `<li>${prop}: <span>${description[prop]}</span></li>`;
    }
    return html;
}


// Обработчик кнопки применить в фильтр-боксе, получает данные только с чекбоксов
// Надо ещё сделать получение интервала цены, но это уже после того как разберусь как работает
// фильтрация
$('.filter_apply_btn').click('click', function(event){
    event.preventDefault();
    let values = [];
    $('input:checked').each( function() {
        values.push( $(this).val() );
    } );
    console.log( values );
});

// --------------------------------------------
