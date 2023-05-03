export class Cart{
    constructor( user ) {
        this.id = user.id;
    }
    onLoad() {
        this.cart = {};
        $.ajax({
            method: 'POST',
            url: '../handlers/cart_load.php',
            data:{
                id: this.id,
                action: 'load',
            },
        }).done((response) => {
            if( JSON.parse(response).length == 0 ) {
                if( Object.keys(JSON.parse( localStorage.getItem('cart'))).length != 0 ){
                    this.cart = JSON.parse( localStorage.getItem('cart') );
                } else {
                    this.cart = {};
                }
            } else {
                this.cart = {};
                for( let elem of JSON.parse( response ) ) {
                    if( this.cart[elem['ID товара']] ) {
                        this.cart[elem['ID товара']] += +elem['Количество'];
                    } else {
                        this.cart[elem['ID товара']] = +elem['Количество'];
                    }
                };
                localStorage.setItem('cart', JSON.stringify(this.cart));
                
            }
            
            console.log( this.cart );
        });
    }

    add(itemID) {
        $.ajax({
            method: 'POST',
            url: '../handlers/cart_load.php',
            data: {
                action: 'add',
                itemId: itemID,
                userId: this.id,
            },
        }).done( (result) => {
            this.onLoad();
        });


        // if( this.cart[itemID] ){
        //     this.cart[itemID]++;
        // } else {
        //     this.cart[itemID] = 1;
        // }
        // this.save();
    }

    remove(itemID) {
        $.ajax({
            method: 'POST',
            url: '../handlers/cart_load.php',
            data: {
                action: 'delete',
                itemId: itemID,
                userId: this.id,
            },
        }).done( (result) => {
            this.onLoad();
        });

    }
    save() {
        console.log( this.id );
    }
}