class User{
    constructor( form, action ) {
        form = new FormData(form);
        form = Object.fromEntries( form.entries() );
        // console.log(form);
        // console.log(this);
        Object.assign( this, form );

        this.tableName = 'Покупатели';
        this.action = action;
        
        this.encryptionPassword( this.password );
    }
    encryptionPassword( password ) {
        this.password = md5( password );
    }
};

import {Cart} from '../catalogs/cart_module.js';

$(document).ready(function () {
    $('.login-panel>form').submit(function (e) {
        e.preventDefault();
        
        if ( e.target.getAttribute('name') === 'registration_form' ) {
            let user = new User( this, 'registration' );
            $.ajax({
                type: 'POST',
                url: './authorization/handler.php',
                data: user,
                cache: false,
            }).done(function(result){
                alert( result );
                window.open('../index.html', '_self');
            });

        } else if( e.target.getAttribute('name') === 'login_form' ) {
            let user = new User( this, 'login' );

            $.ajax({
                url: './authorization/handler.php',
                type: 'POST',
                data: user,
            }).done(function(userDB){
                if(userDB.length != 2){
                    userDB = JSON.parse( userDB )[0];
                    if( user.password == userDB['password'] ){
                        alert( 'Вы авторизовались' );
                        $.ajax({
                            method: 'POST',
                            data: {
                                action: 'entered',
                                user: userDB,
                            },
                            url: './authorization/login.php'
                        }).done( function(result){
                            localStorage.setItem('user', JSON.stringify( userDB ));
                            let promise = new Promise( resolve => {
                                let cart = new Cart( userDB );
                                cart.onLoad();
                            } )
                            promise.then( () => {
                                // window.open('../index.html', '_self');
                            });
                        } );
                        
                        
                    } else {
                        alert( 'Неверный пароль' );
                    }
                } 
                else alert('Пользователя с данным email не существует');
            });
        }
    });
});