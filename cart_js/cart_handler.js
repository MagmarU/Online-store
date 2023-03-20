let block = document.body.querySelector('.cart-wrapper');

let cart = JSON.parse(localStorage.getItem('cart'));
let items = JSON.parse(localStorage.getItem('items'));

function init( items, cart ) {
    // return new Promise( resolve => {
        for( let prop in cart ) {
            
            addItem( items[prop], cart );
        }
        totalPrice();
    // });
}
emptyCart();
init( items, cart );

function addItem( item, cart ) {
    let html = `
    <div class="productCart br-btm" data-id='${item.ID}'>
        <img src="${item.img}" class="item-image">

        <span class="item-title"><a href="./productCard/itemCard.html#${item.ID}">${item.name}</a></span>

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

function totalPrice() {
    let totalPrice = 0;
    for( let prop in cart ) {
        totalPrice += items[prop].price * cart[prop];
    }
    document.body.querySelector('.total_price').textContent = totalPrice + ' ₽';
}

function emptyCart() {
    if( Object.keys(cart).length == 0 ) {
        block.innerHTML += '<span class="emptyCart">Ваша корзина пуста</span>';
        document.body.querySelector('.order-wrapper').style.display = 'none';
    }
}


let counter_btns = document.body.querySelectorAll( '.counter-btn' );

for( let btn of counter_btns ){
    let obj = {
        target: btn.closest('.productCart'),
        plus() {
            this.target.querySelector('.counter-wrapper>input').value++;
            cart[this.target.dataset.id] = this.target.querySelector('.counter-wrapper>input').value;
            this.init();
            totalPrice();
        },
        minus() {
            let selector = this.target.querySelector('.counter-wrapper>input');
            if( selector.value == 1 || selector.value == 0 ) {
                delete cart[this.target.dataset.id];
                deleteItem(this.target);
            } else {
                selector.value--;
                cart[this.target.dataset.id] = this.target.querySelector('.counter-wrapper>input').value;
            }
            totalPrice();
            emptyCart();
            this.init();
        },
        init() {
            
            localStorage.setItem('cart', JSON.stringify(cart));

            this.target.querySelector('.item-total').innerHTML = 
            this.target.querySelector('.counter-wrapper>input').value * 
            parseInt(this.target.querySelector('.item-price').textContent) + '₽';
        }
    }
    btn.addEventListener( 'click', function(event) {
        obj[event.target.dataset.action]();
    });
}

function deleteItem( item ){
    item.remove();
}

