<?php
// Server-side dynamic greeting based on time
date_default_timezone_set('Asia/Kuala_Lumpur'); // Adjust timezone if needed
$hour = date("H");
if ($hour < 12) {
    $greeting = "Good Morning! Welcome to my portfolio.";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon! Let's explore my work.";
} else {
    $greeting = "Good Evening! Take a look at my projects.";
}

// Handle form submission for the contact section
$successMessage = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Simulate form handling logic
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Normally, here you would send an email or store the message in a database
        $successMessage = "Thank you, $name! Your message has been received.";
    } else {
        $successMessage = "Please fill out all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahara A. G. | Portfolio</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external stylesheet -->
    <style>
        /* CSS Styling (for simplicity included inline) */
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
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .success-message {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Zahara A. G. | Portfolio</h1>
        <p><?php echo $greeting; ?></p> <!-- Dynamic Greeting -->
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
        <p>Hello! I am Zahara A. G., a passionate engineer and developer with expertise in web development, design, and problem-solving. I specialize in creating innovative and efficient solutions for real-world challenges.</p>
    </section>

    <!-- Projects -->
    <section id="projects" class="section">
        <h2>Projects</h2>
        <ul>
            <li><strong>Project 1:</strong> Interactive Web Design</li>
            <li><strong>Project 2:</strong> Engineering Solutions Showcase</li>
            <li><strong>Project 3:</strong> Portfolio Website with PHP Integration</li>
        </ul>
    </section>

    <!-- Skills -->
    <section id="skills" class="section">
        <h2>Skills</h2>
        <ul>
            <li>HTML5 & CSS3</li>
            <li>JavaScript & PHP</li>
            <li>3D Printing & Laser Cutting</li>
            <li>Python, MATLAB</li>
        </ul>
    </section>

    <!-- Contact Form -->
    <section id="contact" class="section">
        <h2>Contact Me</h2>
        <form action="" method="POST">
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
        </form>
        <?php if ($successMessage): ?>
            <p class="success-message"><?php echo $successMessage; ?></p>
        <?php endif; ?>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Zahara A. G. | All Rights Reserved</p>
    </footer>
</body>
</html>
