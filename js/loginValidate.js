function loginValidate() {
    const username = document.getElementById('username');
    const password = document.getElementById('password');

    if (username.value === '' || password.value === '') {
        return false;
    }
    return true;
}
