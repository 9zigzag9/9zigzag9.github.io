<?php
// Server-side dynamic greeting based on time
date_default_timezone_set('Asia/Kuala_Lumpur');
$hour = date("H");
if ($hour < 12) {
    $greeting = "Good Morning! Welcome to my portfolio.";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon! Let's explore my work.";
} else {
    $greeting = "Good Evening! Take a look at my projects.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahara A. G. | Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            scroll-behavior: smooth;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
        }
        nav a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #575757;
        }
        .section {
            padding: 20px;
            margin: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #575757;
        }
        .success-message, .error-message {
            margin-top: 10px;
            color: green;
            display: none;
        }
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Zahara A. G. | Portfolio</h1>
        <p><?php echo $greeting; ?></p>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="#about">About Me</a>
        <a href="#projects">Projects</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- About Me -->
    <section id="about" class="section">
        <h2>About Me</h2>
        <p>Hello! I am Zahara A. G., a passionate engineer and developer with expertise in web development, design, and problem-solving.</p>
    </section>

    <!-- Projects -->
    <section id="projects" class="section">
        <h2>Projects</h2>
        <ul>
            <li>Project 1: Interactive Web Design</li>
            <li>Project 2: Engineering Solutions Showcase</li>
        </ul>
    </section>

    <!-- Skills -->
    <section id="skills" class="section">
        <h2>Skills</h2>
        <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript & PHP</li>
            <li>Python, MATLAB</li>
        </ul>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="section">
        <h2>Contact Me</h2>
        <form id="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Send Message</button>
            <p class="success-message" id="success-message">Your message has been sent!</p>
            <p class="error-message" id="error-message">An error occurred. Please try again.</p>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Zahara A. G. | All Rights Reserved-</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // AJAX Form Submission
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            fetch('process_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    successMessage.style.display = 'block';
                    errorMessage.style.display = 'none';
                    document.getElementById('contact-form').reset();
                } else {
                    successMessage.style.display = 'none';
                    errorMessage.style.display = 'block';
                }
            })
            .catch(() => {
                successMessage.style.display = 'none';
                errorMessage.style.display = 'block';
            });
        });
    </script>
</body>
</html>
