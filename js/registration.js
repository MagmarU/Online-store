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
            let user = new User( this, 'login' );
            console.log(user);
            $.ajax({
                url: './authorization/handler.php',
                type: 'POST',
                data: user,
            }).done(function(result){
                result = JSON.parse( result );
                // console.log( (result.map( item => item.email )).includes( user['email'] ) );
                // result = result.foreach()
                // result = result.forEach(item => item);
                // let parseResult = [];
                for( let elem of result ) {
                    // console.log( elem )
                    // console.log( Object.entries(elem) );
                }
                // result.forEach(item => parseResult.push(Object.entries(item)) );
                // console.log( parseResult );

                // if( user['email'] === r )
                for( let elem of result ) {
                    if( user['email'] == elem['email'] || user['password'] == elem['password'] ) {
                        alert( 'Вы авторизовались' );
                        $.ajax({
                            method: 'POST',
                            data: {
                                action: 'entered',
                            },
                            url: './authorization/login.php'
                        });
                        break;
                    }
                    // else{
                    //     alert('Вы не авторизовались');
                    // }
                }
            });
        }

    });
});