document.addEventListener("DOMContentLoaded", function () {
    // Get the form element
    var form = document.querySelector('.contact-form form');

    // Add submit event listener to the form
    form.addEventListener('submit', function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get form elements
        var nameInput = document.querySelector('input[type="text"]');
        var emailInput = document.querySelector('input[type="email"]');
        var subjectInput = document.querySelector('input[type="text"]');
        var messageTextarea = document.querySelector('textarea');

        // Get the values from form inputs
        var name = nameInput.value;
        var email = emailInput.value;
        var subject = subjectInput.value;
        var message = messageTextarea.value;

        // Here, you can perform validation if needed

        // Create your AJAX request or any other logic to handle form submission
        // For demonstration, let's just log the values to the console
        console.log("Name: " + name);
        console.log("Email: " + email);
        console.log("Subject: " + subject);
        console.log("Message: " + message);

        // Reset form after submission (optional)
        form.reset();
    });
});