// checkpassword.js

document.addEventListener('DOMContentLoaded', (event) => {
    const form = document.querySelector('form');
    const password = document.getElementById('inputPassword');
    const confirmPassword = document.getElementById('inputConfirmPassword');

    form.addEventListener('submit', function (event) {
        if (password.value !== confirmPassword.value) {
            event.preventDefault();
            alert('Passwords do not match. Please re-enter your password.');
        }
    });
});