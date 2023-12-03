function validation() {
    var password = document.getElementById('pass');
    var confirmPassword = document.getElementById('re_pass');
    var notMatchMessage = document.getElementById('not-match');

    if (password.value === confirmPassword.value) {
        // Passwords match, proceed with form submission
        // notMatchMessage.style.visibility = "none";
        return true;
    } else {
        // Passwords do not match, prevent form submission
        console.log("TOL");
        notMatchMessage.style.transform = "scale(1)";
        notMatchMessage.style.transition = "all 0.5s";
        notMatchMessage.style.visibility = "visible";
        setTimeout(() => {
            notMatchMessage.style.visibility = "hidden";
        }, 2000);
        return false;
    }
}