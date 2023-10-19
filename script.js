const contain = document.getElementById("contain");
const loginButton = document.getElementById("contain-submit");
const containErrorMsg = document.getElementById("contain-error-msg");

loginButton.addEventListener('click', (e) => {
        e.preventDefault();
        const username = contain.username.value;
        const password = contain.password.value;

        if (username === "abiy" && password === "1234") {
            alert("You have successfully logged in.");
            location.reload();
        } else {
            containErrorMsg.style.opacity = 1;
        }
    })