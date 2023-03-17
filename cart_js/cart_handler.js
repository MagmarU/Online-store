let block = document.body.querySelector('.cart-wrapper');

let observer = new MutationObserver( MutationRecords => {
    console.log( MutationRecords );
} );


function init( items, cart ) {
    // return new Promise( resolve => {
        for( let prop in cart ) {
            
            addItem( items[prop], cart );
        }
    // });
}
init( JSON.parse(localStorage.getItem('items')), JSON.parse(localStorage.getItem('cart')) );

function addItem( item, cart ) {
    let html = `
    <div class="productCart br-btm" data-id='${item.ID}'>
        <img src="../img/errfolder.jpg" class="item-image">

        <span class="item-title">${item.name}</span>

        <span class="item-price">${item.price} руб/шт</span>

        <div class="item-counter">
            <div class="counter-wrapper">
                <button class="minus counter-btn" data-action = 'minus'>-</button>
                <input type="text" value="${cart[item.ID]}" readonly>
                <button class="plus counter-btn" data-action = 'plus'>+</button>
            </div>

        </div>

        <span class="item-total">${ item.price * cart[item.ID] } ₽</span>

        <div class="deleteItems item-delete">
            <button class="deleteItem"></button>
        </div>
    </div>
    `;
    block.innerHTML += html;
    
}

let counter_btns = document.body.querySelectorAll( '.counter-btn' );

for( let btn of counter_btns ){
    let obj = {
        target: btn.closest('.counter-wrapper').querySelector('input'),
        plus() {
            this.target.value++;
            this.init();
        },
        minus() {
            if( this.target.value == 1 || this.target.value == 0 ) {
                this.target.value = 0;
                
            } else this.target.value--;
            this.init();
        },
        init() {
            let parent = btn.closest('.productCart');
            parent.querySelector('.item-total').innerHTML = this.target.value * parseInt(parent.querySelector('.item-price').textContent) + '₽';
        }
    }
    btn.addEventListener( 'click', function(event) {
        obj[event.target.dataset.action]();
    });
}

