<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg bg-white py-3">
            <div class="container">
                <a href="." class="navbar-brand text-uppercase">
                    <img src="garuda.png" alt="" style="max-width: 50px; max-height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav gap-3 mx-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link <?= ($title == 'Homepage') ? 'active text-primary' : '' ?>">Home</a></li>
                        <li class="nav-item"><a href="blog.php" class="nav-link <?= ($title == 'Blog') ? 'active text-primary' : '' ?>">Blog</a></li>
                        <li class="nav-item"><a href="service.php" class="nav-link <?= ($title == 'Service') ? 'active text-primary' : '' ?>">Service</a></li>
                        <li class="nav-item"><a href="AboutUs.php" class="nav-link <?= ($title == 'AboutUs') ? 'active text-primary' : '' ?>">About Us</a></li>
                    </ul>

                    <ul class="navbar-nav gap-3">
                        <?php
                        if (!isset($_SESSION['user_id'])) {
                        ?>
                            <li class="nav-item"><a href="login.php" class="nav-link <?= ($title == 'Login') ? 'active text-primary' : '' ?> ">Login</a></li>
                            <li class="nav-item"><a href="register.php" class="nav-link <?= ($title == 'register') ? 'active text-primary' : '' ?> ">Register</a></li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <p class="nav-link active">Hi, sfjmkamfsa</p>
                            </li>
                            <li class="nav-item"><a href="blogger/php/logout.php" class="nav-link">Logout</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>