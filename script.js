// Dynamic Greeting Based on Time
document.addEventListener('DOMContentLoaded', function() {
    const greetingElement = document.getElementById('greeting');
    const hour = new Date().getHours();

    let greetingMessage;
    if (hour < 12) {
        greetingMessage = "Good Morning! Welcome to my portfolio.";
    } else if (hour < 18) {
        greetingMessage = "Good Afternoon! Let's explore my work.";
    } else {
        greetingMessage = "Good Evening! Take a look at my projects.";
    }

    greetingElement.textContent = greetingMessage;
});

// Simulated Form Submission
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Simulate form processing
    const successMessage = document.getElementById('success-message');
    successMessage.style.display = 'block';

    // Clear form fields
    this.reset();

    // Hide message after 3 seconds
    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 3000);
});
