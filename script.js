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

// Alert Message for Contact Button
document.getElementById('contactBtn').addEventListener('click', function() {
    alert("Thank you for visiting my portfolio! Feel free to send me an email.");
});
