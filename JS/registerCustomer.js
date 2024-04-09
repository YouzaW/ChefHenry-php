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
    var customerName = document.getElementById('ctname');
    var customerPhone = document.getElementById('ctphoneno');
    var customerEmail = document.getElementById('ctemail');
    var customerAmt = document.getElementById('ctAmount');
    var phoneRef = /^(\d){10}$/;

    if (customerName === "") {
        alert("Please enter your name.");
        return false;
    }

    if (customerPhone === "") {
        alert("Please enter your phone.");
        return false;
    }

    else if(!customerPhone.value.match(phoneRef))
    {
        alert("Not a valid Phone Number");
    }

    if (customerEmail === "") {
        alert("Please enter your email.");
        return false;
    }

    if (customerAmt === "") {
        alert("Please enter the amount of customer.");
        return false;
    }


    return true;
}