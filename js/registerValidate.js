function registerValidate() {
    const fname = document.getElementById('fname');
    const lname = document.getElementById('lname');
    const email = document.getElementById('email');
    const uname = document.getElementById('uname');
    const ans = document.getElementById('ans');
    const password = document.getElementById('password');
    const cpassword = document.getElementById('cpassword');
    if (
        fname.value === '' ||
        lname.value === '' ||
        email.value === '' ||
        uname.value === '' ||
        ans.value === '' ||
        password.value === '' ||
        cpassword === ''
    ) {
        return false;
    }
    return true;
}
