"use strict";

document.forms.authorization.addEventListener('submit', function auth(event) {
    event.preventDefault();
    fetch('auth.php', {
        method: 'post',
        body: new FormData(this)
    })
        .then(response => response.text())
        .then(text => {
            if (text === 'SUCCESS') {
                window.location.replace('account.php');
            } else if (text === 'WRONG') {
                document.getElementById('message').innerText = 'Вход не выполнен. Проверьте имя пользователя/пароль'
            } else {
                document.getElementById('message').innerText = 'Попробуйте ещё раз. ' + text;
            }
        })
})