function Validator() {
    let userName = document.getElementById("userName");
    let password = document.getElementById("password");

    if (userName.value == "admin" && password.value == "421$$") {
        window.alert("Welcome login success");
    } else if (userName.value !== "admin") {
        window.alert("Invalid username or Password");
    } else {
        window.alert("Invalid password or username");
    }
}


function Sum() {
    var Fnum = parseFloat(document.getElementById('Fnum').value),
        Snum = parseFloat(document.getElementById('Snum').value)
    Result1 = Fnum + Snum
    document.getElementById('Result').innerText = Result1
}

function subtract() {
    var Fnum = parseFloat(document.getElementById('Fnum').value),
        Snum = parseFloat(document.getElementById('Snum').value)
    Result2 = Fnum - Snum
    document.getElementById('Result').innerText = Result2
}

function multi() {
    var Fnum = parseFloat(document.getElementById('Fnum').value),
        Snum = parseFloat(document.getElementById('Snum').value)
    Result3 = Fnum * Snum
    document.getElementById('Result').innerText = Result3
}

function division() {
    var Fnum = parseFloat(document.getElementById('Fnum').value),
        Snum = parseFloat(document.getElementById('Snum').value)
    Result4 = Fnum / Snum
    document.getElementById('Result').innerText = Result4
}

function Mod() {
    var Fnum = parseFloat(document.getElementById('Fnum').value),
        Snum = parseFloat(document.getElementById('Snum').value)
    Result5 = Fnum % Snum
    document.getElementById('Result').innerText = Result5
}


function calc2() {
    document.getElementById('Result2').innerText = Result1 + Result2 + Result3 + Result4 + Result5
}