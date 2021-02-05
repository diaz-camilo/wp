/* Insert your javascript here */
// I am a lazy typer ...
function getid(sP) {
    return document.getElementById(sP);
}

// get all the elements of class 'error', clear the inner html
function clearErrors() {
    alert("about to clear errors");
    var allErrors = document.getElementsByClassName('error');
    for (var i = 0; i < allErrors.length; i++) {
        allErrors[i].innerHTML = "";
    }
    var allInputs = document.getElementsByTagName('input');
    for (i = 0; i < allInputs.length; i++) {
        allInputs[i].style.removeProperty("background-color");
    }
}

// Check the name - make sure only english alphabet character
function nameCheck() {
    var name = getid('name').value;
    var pattern = /^[a-zA-Z \-.']{1,100}$/;
    if (pattern.test(name)) {
        getid('name_validation').innerHTML = "";
        getid('name').style.background = "#e9e7da";
        return true;
    }
    else {
        getid('name_validation').innerHTML = "Please use only characters without accents and these symbols .-'";
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
        return true;
    }
    else {
        getid('email_validation').innerHTML = "Email is not valid! Please try again";
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
        return true;
    }
    else {
        getid('mobile_validation').innerHTML = "Mobile must start with 04 or (04) or +614 followed by 8 digits";
        getid('mobile_validation').style.color = "#f88";
        getid('mobile').style.background = "#eaa";
        return false;
    }
}

// check subject
function subjectCheck() {
    var subject = getid('subject').value;
    var pattern = /^[A-Za-z,.' ;:!?-]+$/;
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
    var pattern = /^[A-Za-z,.' ;:!?(){}-]+$/;
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
    // Is their first name 'Steve'
    if (!nameCheck()) countErrors++;
    // Are they a scientist?
    if (!scientistCheck()) countErrors++;
    // Is the filename in format xxxxx.pdf?
    if (!fileNameCheck()) countErrors++;
    // Block or allow submission depending on number of errors
    console.log(countErrors);
    return (countErrors == 0);
}