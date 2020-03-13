function chkPasswords() {
    var init = document.getElementById("password");
    var sec = document.getElementById("verification");
    if (init && sec) {
        if (init.value == "") {
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
            return false;
        } else {
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
        }

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
            return false;
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

            var subBtn = document.getElementById("submitButton");
            if (subBtn) {
                subBtn.disabled = false;
            }
            return true;
        }
    }
    return false;
}

function registerHandlers() {
    document.getElementById("verification").onblur = chkPasswords;
    document.getElementById("myForm").onsubmit = chkPasswords;
}
