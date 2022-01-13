"use strict";

document.getElementById('account').addEventListener('click', function () {
    document.getElementById('modal-window').style.display = 'block';
});

document.forms.auth.addEventListener('submit', function (event) {
    event.preventDefault();
    if (this.elements.login.value !== ''  && this.elements.password.value !== '') {

        document.getElementById('invalid').style.visibility = 'hidden';
        fetch('auth.php', {
            method: 'post',
            body: new FormData(this)
        })
            .then(response => response.text())
            .then(text => {
                if (text === 'SUCCESS') {
                    document.getElementById('modal-window').style.display = 'none';
                    document.getElementById('incorrect').style.visibility = 'hidden';
                }
                else document.getElementById('incorrect').style.visibility = 'visible';
            });
    } else {
        document.getElementById('invalid').style.visibility = 'visible';
    }

})