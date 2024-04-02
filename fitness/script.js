
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// Get reference to the create button for sign-up form
const createBtn = document.getElementById('create');

// Add event listener for the sign-up button
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// Add event listener for the sign-in button
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Add event listener for the create button (sign-up form submission)
createBtn.addEventListener('click', (event) => {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Perform any additional validation if needed
    // For example, check if all required fields are filled
    let pass = document.getElementById('password').value;
    let confirm_pass = document.getElementById('confirmpassword').value;
    if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML
            = '☒ Use same password';
        document.getElementById('create').disabled = true;
        document.getElementById('create').style.opacity = (0.4);
        return; // Stop form submission if passwords don't match
    }

    // Submit the form using JavaScript
    //document.querySelector('.sign-up form').submit();
});