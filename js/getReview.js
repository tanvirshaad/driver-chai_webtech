function getReview() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById('msg').innerHTML = this.responseText;
        xhttp.open('GET', 'http://localhost/project/Model/getReview.php');
        xhttp.send();
    };
}
