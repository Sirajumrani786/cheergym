// JavaScript for newsletter signup form
document.addEventListener("DOMContentLoaded", function() {
    var newsletterForm = document.getElementById("newsletterForm");

    newsletterForm.addEventListener("submit", function(event) {
        // Prevent form submission
        event.preventDefault();

        // Get email input value
        var emailInput = newsletterForm.querySelector("input[name='email']").value;

        // Validate email format
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput)) {
            alert("Please enter a valid email address.");
            return;
        }

        // If validation passes, display success message
        alert("Thank you for subscribing to our newsletter!");
        newsletterForm.reset(); // Clear form fields
    });
});
