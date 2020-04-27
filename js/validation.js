function registerHandlers() {
    document.getElementById("myForm").onsubmit = validate;
}

function passwordFormat() {

    var init = document.getElementById("pword");
    var pword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/;

    if (init.value != init.value.match(pword)) {
        var initDiv = document.getElementById("passDiv");
        if (initDiv) {
            initDiv.classList.add("has-error");
            initDiv.classList.remove("has-success");
        }

        var initErr = document.getElementById("passErr");
        if (initErr) {
            initErr.classList.remove("hide");
            initErr.classList.add("show");
        }

        var subBtn = document.getElementById("submitButton");
        if (subBtn) {
            subBtn.disabled = true;
        }

        return false;
    }

    if (init.value.match(pword)) {

        var initDiv = document.getElementById("passDiv");
        if (initDiv) {
            initDiv.classList.remove("has-error");
            initDiv.classList.add("has-success");
        }

        var initErr = document.getElementById("passErr");
        if (initErr) {
            initErr.classList.add("hide");
            initErr.classList.remove("show");
        }

        if (passwordMatch() == true) {
            var subBtn = document.getElementById("submitButton");
            if (subBtn) {
                subBtn.disabled = false;
            }
        }
    }
}

//Verify Password Matches Original Password
function passwordMatch() {

    var init = document.getElementById("pword");
    var sec = document.getElementById("verification");
    var pword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/;

    if (init.value != sec.value) {

        var secDiv = document.getElementById("verPassDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("verPassErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        var subBtn = document.getElementById("submitButton");
        if (subBtn) {
            subBtn.disabled = true;
        }

        return false;
    }

    if (init.value == init.value.match(pword)) {

        var secDiv = document.getElementById("verPassDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("verPassErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }

        var subBtn = document.getElementById("submitButton");
        if (subBtn) {
            subBtn.disabled = false;
        }
    } else {

        var secDiv = document.getElementById("verPassDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("verPassErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }
}


function checkUsername(x) {

    if (x.value.length>5 && x.value.length<51){
        var secDiv = document.getElementById("UserDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("UserErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("UserDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("UserErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}

function checkFirst(x) {

    if (x.value.length>0 && x.value.length<51){
        var secDiv = document.getElementById("FirstDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("FirstErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("FirstDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("FirstErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}

function checkLast(x) {

    if (x.value.length>0 && x.value.length<51){
        var secDiv = document.getElementById("LastDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("LastErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("LastDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("LastErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}

function checkAddress1(x) {

    if (x.value.length>0 && x.value.length<101){
        var secDiv = document.getElementById("Add1Div");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("Add1Err");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("Add1Div");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("Add1Err");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}

function checkAddress2(x) {

    if (x.value.length<101){
        var secDiv = document.getElementById("Add2Div");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("Add2Err");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("Add2Div");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("Add2Err");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }
    }
}

function checkCity(x) {

    if (x.value.length>0 && x.value.length<101){
        var secDiv = document.getElementById("CityDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("CityErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("CityDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("CityErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}

function checkState(x) {

    if (x.value.length>0 && x.value.length<53){
        var secDiv = document.getElementById("StateDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("StateErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("StateDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("StateErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}

function checkZip(x){

    x.value = x.value.replace(/\D+/, "");

    if(x.value.length > 5){
        x.value=x.value.slice(0,5) + "-" + x.value.slice(5,9);
    }

    if (x.value.length>4 && x.value.length<11){
        var secDiv = document.getElementById("ZipDiv");
        if (secDiv) {
            secDiv.classList.remove("has-error");
            secDiv.classList.add("has-success");
        }

        var secErr = document.getElementById("ZipErr");
        if (secErr) {
            secErr.classList.add("hide");
            secErr.classList.remove("show");
        }
    }

    else{
        var secDiv = document.getElementById("ZipDiv");
        if (secDiv) {
            secDiv.classList.add("has-error");
            secDiv.classList.remove("has-success");
        }

        var secErr = document.getElementById("ZipErr");
        if (secErr) {
            secErr.classList.remove("hide");
            secErr.classList.add("show");
        }

        return false;
    }
}


function checkEmail(x)
{
    var format = /^\S+\@\S+\.\S+$/;

    if (email.value != email.value.match(format)) {
        var initDiv = document.getElementById("EmailDiv");
        if (initDiv) {
            initDiv.classList.add("has-error");
            initDiv.classList.remove("has-success");
        }

        var initErr = document.getElementById("EmailErr");
        if (initErr) {
            initErr.classList.remove("hide");
            initErr.classList.add("show");
        }

    }

    if (email.value.match(format)) {

        var initDiv = document.getElementById("EmailDiv");
        if (initDiv) {
            initDiv.classList.remove("has-error");
            initDiv.classList.add("has-success");
        }

        var initErr = document.getElementById("EmailErr");
        if (initErr) {
            initErr.classList.add("hide");
            initErr.classList.remove("show");
        }

        return false;
    }
}

function validate() {

    if( document.getElementById("password") != false){
        if(document.getElementById("verification") != false){
            if(document.getElementById("username") != false){
                if(document.getElementById("firstname") != false){
                    if(document.getElementById("lastname") != false){
                        if(document.getElementById("address1") != false){
                            if(document.getElementById("city") != false){
                                if(document.getElementById("state") != false){
                                    if(document.getElementById("zip") != false){
                                        if(document.getElementById("email") != false){
                                            if(document.getElementById("zip") != false){
                                                if(document.getElementById("maleGender").checked ||
                                                    document.getElementById("femaleGender").checked ||
                                                    document.getElementById("otherGender").checked){
                                                    if(document.getElementById("married").checked ||
                                                        document.getElementById("notMarried").checked ){
                                                    }}}}}}}}}}}}}
    else {
        return false; }
}
