<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Coaching App</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: #fff;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .hero {
            padding: 60px 20px;
            text-align: center;
            background: url('https://source.unsplash.com/1600x600/?fitness,gym') no-repeat center center/cover;
            color: white;
        }

        .content {
            padding: 20px;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Ilyass's Fitness Coaching</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Programs</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<section class="hero">
    <h2>Get Fit, Stay Healthy</h2>
    <p>Your journey to a better life starts here.</p>
</section>

<div class="content">
    <h3>About Us</h3>
    <p>We offer personalized coaching programs to help you reach your fitness goals. Join hundreds of athletes already transforming their lives.</p>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Ilyass Fitness Coaching. All rights reserved.</p>
</footer>

</body>
</html>
