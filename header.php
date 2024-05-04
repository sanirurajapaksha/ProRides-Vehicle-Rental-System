<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/header.css">
</head>


<body>
    <?php
    if (isset($_SESSION["email"])) {
        echo '<header>
        <img id="logo__header" src="./assets/logo.png" alt="ProRides Logo" onclick="goToHomePage()">
        <nav>
            <ul>
                <li><a href="/profile.php">Profile</a></li>
                <li><a href="includes/logout.inc.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <script>
        function goToHomePage() {
            window.location.href = "/index.php";
        }
    </script>';


    } else {
        echo
            '<header>
            <img id="logo__header" src="./assets/logo.png" alt="ProRides Logo" onclick="goToHomePage()">
            <nav>
                <ul>
                    <li><a href="/login.php">Log In</a></li>
                    <li><a href="/signup.php">Register</a></li>
                </ul>
            </nav>
        </header>
        <script>
            function goToHomePage() {
                window.location.href = "/index.php";
            }
        </script>
        ';



    }
    ?>

</body>

</html>