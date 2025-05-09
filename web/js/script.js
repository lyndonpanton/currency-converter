document.addEventListener("DOMContentLoaded", function (e) {
    let converter = document.getElementById("converter");
    converter.addEventListener("submit", convertCurrency);

    function convertCurrency(e) {
        console.log("ok");
        e.preventDefault();
    }
});
