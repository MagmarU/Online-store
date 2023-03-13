let bttns = document.body.querySelector('.header-menu>li');

// Проверка на клик в панели навигации именно на иконку пользователя, потому что querySelector
// берёт первый подходящий элемент
bttns.addEventListener( 'click', function(event) {
    event.preventDefault();
    console.log( 1 );
    // Отправляет запрос в login.php, чтобы получить статус, вошёл пользователь или нет
    $.ajax({
        url: './authorization/login.php',
        method: 'POST',
        data: {
            action: 'checkStatus'
        }
    })
    // ------------------------------------------------------------------
    // При успешной отправке проверяет результат
    .done(function(result) {
        // Если пользователь вошёл, то делает блок с кнопкой выхода видимым, иначе переходит на страницу входа
        if( result == 'logined' ){
            if( event.target.className == 'user_icon' ) {
                event.target.closest('.header-menu').querySelector('.exitFromAcc').hidden = false;
            }
            else if( searchClass(event.target.classList, 'exitFromAccount') ) {
                $.ajax({
                    url: './authorization/login.php',
                    method: 'post',
                    data:{
                        action: 'exit',
                    }
                });
            }

        } else if( result == 'unlogined' || result == '' ) {
            window.location.href = "./userPanel.php";
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