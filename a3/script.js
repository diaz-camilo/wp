/* Insert your javascript here */
// I am a lazy typer ...
function getid(sP) {
    return document.getElementById(sP);
}

// get all the elements of class 'error', clear the inner html
function clearErrors() {
    
    var allErrors = document.getElementsByClassName('error');
    for (var i = 0; i < allErrors.length; i++) {
        allErrors[i].innerHTML = "";
    }
    var allInputs = document.getElementsByTagName('input');
    for (i = 0; i < allInputs.length; i++) {
        allInputs[i].style.removeProperty("background-color");
    }
}

function storeInfo(id) {
    if (getid('remember-me').checked == true  && typeof(Storage) !== 'undefined') {        
        localStorage.setItem (String(id), getid(String(id)).value); 
    }
}

// Check the name - make sure only english alphabet character
function nameCheck() {
    var name = getid('name').value;
    var pattern = /^([a-zA-Z \-.'áéíóúüñÁÉÍÓÚÜÑ]{1,100})$/;
    if (pattern.test(name)) {
        getid('name_validation').innerHTML = "";
        getid('name').style.background = "#e9e7da";
        storeInfo('name');
        return true;
    }
    else {
        getid('name_validation').innerHTML = "This field only accepts letters found in the English and Spanish alphabets and spaces, dashes (Lin-Manuel Miranda), apostrophes (O'Connell), periods (Mrs. María Álvarez-Nuñez).";
        getid('name_validation').style.color = "#f88";
        getid('name').style.background = "#eaa";
        return false;
    }
}

// check email
function emailCheck() {
    var email = getid('email').value;
    var pattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
    if (pattern.test(email)) {
        getid('email_validation').innerHTML = "";
        getid('email').style.background = "#e9e7da";
        storeInfo('email');
        return true;
    }
    else {
        getid('email_validation').innerHTML = "Email is not valid! Please check your email and try again";
        getid('email_validation').style.color = "#f88";
        getid('email').style.background = "#eaa";
        return false;
    }
}

// check mobile
function mobileCheck() {
    var mobile = getid('mobile').value;
    var pattern = /^(()|((\(04\)|04|\+614)( ?\d){8}))$/;
    if (pattern.test(mobile)) {
        getid('mobile_validation').innerHTML = "";
        getid('mobile').style.background = "#e9e7da";
        storeInfo('mobile');
        return true;
    }
    else {
        getid('mobile_validation').innerHTML = "Mobile should start with 04, (04) or +614 and be followed by eight digits. single spaces are alowed between numbers.";
        getid('mobile_validation').style.color = "#f88";
        getid('mobile').style.background = "#eaa";
        return false;
        
    }
}

// check subject
function subjectCheck() {
    var subject = getid('subject').value;
    var pattern = /^[ !-;=?-~áéíóúüñÁÉÍÓÚÜÑ]+$/;
    if (pattern.test(subject)) {
        getid('subject_validation').innerHTML = "";
        getid('subject').style.background = "#e9e7da";
        return true;
    }
    else {
        getid('subject_validation').innerHTML = "Only characters from the english alphabet and punctuation is accepted";
        getid('subject_validation').style.color = "#f88";
        getid('subject').style.background = "#eaa";
        return false;
    }
}

// check Message
function messageCheck() {
    var message = getid('message').value;
    var pattern = /^[ !-;=?-~áéíóúüñÁÉÍÓÚÜÑ\n]+$/;
    if (pattern.test(message)) {
        getid('message_validation').innerHTML = "";
        getid('message').style.background = "#e9e7da";
        return true;
    }
    else {
        getid('message_validation').innerHTML = "Only characters from the english alphabet and punctuation is accepted";
        getid('message_validation').style.color = "#f88";
        getid('message').style.background = "#eaa";
        return false;
    }
}


// This is where it all happens!
function formValidate() {
    // clear all errors, even if it's the first run
    clearErrors();
    var countErrors = 0;
    if (!nameCheck()) countErrors++;
    if (!emailCheck()) countErrors++;
    if (!mobileCheck()) countErrors++;
    if (!subjectCheck()) countErrors++;
    if (!messageCheck()) countErrors++;

    console.log(countErrors);
    return (countErrors == 0);
}

function rememberMe(){
    if (getid('remember-me').checked == true  && typeof(Storage) !== 'undefined') {        
        nameCheck();
        emailCheck();
        mobileCheck();
    } else if (getid('remember-me').checked != true  && typeof(Storage) !== 'undefined'){
        localStorage.removeItem('name');
        localStorage.removeItem('email');
        localStorage.removeItem ('mobile');        
    }
}

function retriveUser() {
    if (typeof(Storage) !== 'undefined'){
        var name = localStorage.getItem('name');
        if (name != null){
            getid('name').value = name;
        }
        var mobile = localStorage.getItem('mobile');
        if (mobile != null){
            getid('mobile').value = mobile;
        }
        var email = localStorage.getItem('email');
        if (email != null){
            getid('email').value = email;
        }
        

    }
}