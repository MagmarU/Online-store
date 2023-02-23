$(document).ready(function () {
    $('.login-panel>form').submit(function (e) {
        e.preventDefault();
        if ( e.target.getAttribute('name') === 'registration_form' ) {
            let form = new FormData(this);
            let user = Object.fromEntries( form.entries() );
            user.tableName = 'Пользователи';
            $.ajax({
                type: 'POST',
                url: './authorization/handler.php',
                data: user,
                cache: false,
            }).done(function(result){
                console.log( result );
            });
            // for (let [name, value] of form) {
            //     console.log(name, value)
            // }

        } else if( e.target.getAttribute('name') === 'login_form' ) {
            let form = new FormData( this );

            let obj = Object.fromEntries( form.entries() );
            console.log( obj );
            // $.ajax({
            //     type: 'POST',
            //     url: 'handler.php',
            //     data:{
            //         // name: 
            //     }
            // })

            // for( let [name, value] of form ) {
            //     console.log( value, name );
            // }
        }

    });
});