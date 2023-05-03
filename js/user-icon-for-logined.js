let bttns = document.body.querySelector('.header-menu>li');
// Проверка на клик в панели навигации именно на иконку пользователя, потому что querySelector
// берёт первый подходящий элемент
bttns.addEventListener( 'click', function(event) {
    event.preventDefault();
    // Отправляет запрос в login.php, чтобы получить статус, вошёл пользователь или нет
    $.ajax({
        url: '../authorization/login.php',
        method: 'POST',
        data: {
            action: 'checkStatus'
        }
    })
    // ------------------------------------------------------------------
    // При успешной отправке проверяет результат
    .done(function(result) {
        console.log( result );
        // Если пользователь вошёл, то делает блок с кнопкой выхода видимым, иначе переходит на страницу входа
        if( result == 'unlogined' || result == '' || result == 'null') {
            window.location.href = "../userPanel.php";
        } else if( result != 'unlogined' ){
            if( event.target.className == 'user_icon' ) {
                event.target.closest('.header-menu').querySelector('.exitFromAcc').hidden = false;
            }
            else if( searchClass(event.target.classList, 'exitFromAccount') ) {
                $.ajax({
                    url: '../authorization/login.php',
                    method: 'post',
                    data:{
                        action: 'exit',
                    }
                }).done( function(response) {
                    localStorage.removeItem('user');
                } );
            }
        } 
    });
    // ---------------------------------------------------------------------
});
// ---------------------------------------------------------------------

function searchClass( obj, className ) {
    for( let prop of obj ) {
        if( prop == className ) {
            return true;
        }
    }
}

document.addEventListener('click', function(event) {
    if( !(event.target.closest('.exitFromAcc') || event.target.closest('.user_icon_button')) ) {
        document.body.querySelector('.exitFromAcc').hidden = true;
    }
});