document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const name = document.querySelector("input[name='name']");
    const email = document.querySelector("input[name='email']");
    const password = document.querySelector("input[name='password']");
    const cpassword = document.querySelector("input[name='cpassword']");

    form.addEventListener("submit", function(event) {
        let isValid = true;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        
        document.querySelectorAll(".error-message").forEach(e => e.remove());

        
        if (name.value.trim() === "") {
            showError(name, "Name is required.");
            isValid = false;
        }

        
        if (!emailPattern.test(email.value)) {
            showError(email, "Invalid email address.");
            isValid = false;
        }

        
        if (password.value !== cpassword.value) {
            showError(cpassword, "Passwords do not match.");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    function showError(input, message) {
        const error = document.createElement("div");
        error.className = "error-message";
        error.style.color = "red";
        error.textContent = message;
        input.parentElement.appendChild(error);
    }
});
