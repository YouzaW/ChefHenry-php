let main = document.getElementById("popmain");
let login = document.getElementById("popuplog");
let register = document.getElementById("popupreg");

function openLogin() {
    login.classList.add("open_popup");
    main.classList.add("close_popup");
}

function openReg() {
    register.classList.add("open_popup");
    main.classList.add("close_popup");
}

function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email == "") {
        alert("Please enter your email.");
        return false;
    }

    if (password == "") {
        alert("Please enter your password.");
        return false;
    }

    return true;
}