let width = 234.5;
let count = 4;


let position = 0;

//Потом изменить структуру и сделать через класс или объект
let obj = {
    next(div, list) {
        position -= width * count;
        position = Math.max( position, -width * ( div.length - count ) );
        list.style.marginLeft = position + 'px';
    },
    prev( div, list ) {
        position += width * count;
        position = Math.min( position, 0 );
        list.style.marginLeft = position + 'px';
    }
    
}


let btns = document.body.querySelectorAll('.slick-nav');
for( let btn of btns ) {
    btn.addEventListener( "click", function(event) {
        if( event.target.tagName == "BUTTON" ) {
            let carousel = event.target.closest('.row').querySelector('.product-tabs');
            let list = carousel.querySelector('ul');
            let listItems = carousel.querySelectorAll('li');
            obj[event.target.dataset.action]( listItems, list );
        }
    } );
}


let product = document.querySelector('.product');