class User{
    constructor( form, action ) {
        form = new FormData(form);
        form = Object.fromEntries( form.entries() );
        Object.assign( this, form );

        this.tableName = 'Покупатели';
        this.action = action;
        
        this.ecryptionPassword( this.password );
    }
    ecryptionPassword( password ) {
        this.password = md5( password );
    }
};


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
            });

        } else if( e.target.getAttribute('name') === 'login_form' ) {
            let user = new User( this, 'login' )
            $.ajax({
                url: './authorization/handler.php',
                type: 'POST',
                data: user,
            }).done(function(result){
                result = JSON.parse( result );
                for( let elem of result ) {
                    if( user['email'] == elem['email'] || user['password'] == elem['password'] ) {
                        console.log( 'Вы авторизовались' );
                        $.ajax({
                            method: 'POST',
                            data: {
                                action: 'entered',
                            },
                            url: './authorization/login.php'
                        });
                        break;
                    }
                }
            });
        }

    });
});