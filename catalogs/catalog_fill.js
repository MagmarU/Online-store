const descriptionGenerate = {
    'Материнская плата': {
        
        'item_Form_Factor' : 'Форм-фактор', 
        'item_Socket' : 'Сокет', 
        'item_Chipset' : 'Чипсет', 
        'item_Memory_Slots' : 'Количество слотов памяти', 
        'item_RAM' : 'Тип озу',
    },

}



// Добавление данных в класс
class Items {
    constructor( value ) {

    }
    addItem( item ) {
        this[item.ID] = item;
    }
};

let ims;
let items = new Items();
$.ajax({
    method: 'GET',
    url: "catalog_fill.php",
}).done(function (result){
    ims = JSON.parse( result );
    for( let elem of ims ) {
        items.addItem(elem);
    }
    init(items);
});

// Добавление данных в класс



function init(obj) {

    for( let prop in obj ) {
        obj[prop].description = decodeSerialize( obj[prop].description );
        obj[prop].description = generationDescription( obj[prop].description, obj[prop].category );

        fillingForm( obj[prop] );

    }
    // console.log( obj ); // десериализованные товары
}

function decodeSerialize( str ) {
    let arr = [];
    arr = str.split('&');
    arr = arr.map( item => item = item.split('=') );
    let obj = Object.fromEntries( arr );
    return obj;
};

function generationDescription( description, category ) {
    let dsc = {};
    // console.log( category );
    for( let prop in descriptionGenerate[category] ) {
        dsc[descriptionGenerate[category][prop]] = description[prop];
        // console.log( prop );
    }
    return dsc;
    // console.log(dsc);
    
}

// В итоге получается объект вида: 
// {
//     ID: Item{
//         name: ...,
//         article: ...,
//         description: {
//             item_Attr: ...,
//             item_Attr: ...,
//         }
//     }
// }

let page = document.body.querySelector('[data-page]');

function fillingForm( item ){

    if( item.category == page.dataset.page ) {

        let html = `<div class="productModel br-btm br-rght">
                        <div class="product-image">
                            <img src="../img/errfolder.jpg" alt="">
                        </div>
                        <div class="productName">
                            <span>${item.name}</span>
                            <div class="description">
                                <ul>
                                    ${objToHtml(item.description)}
                                </ul>
                            </div>
                        </div>
                        <div class="productPrice">
                            <span>${item.price} ₽</span>
                            <button class="inCart catalogBtns"><span>В корзину</span></button>
                        </div>
                    </div>`;

        page.innerHTML += html;
        
    }

};

function objToHtml( description ) {
    let html = '';
    for( let prop in description ) {
        html += `<li>${prop}: <span>${description[prop]}</span></li>`;
    }
    return html;
}