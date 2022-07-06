<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Control</title>

    <!-- Links -->
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="Contact.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main id="main-login">
        <div class="container">
            <h1>Controlling our participants</h1>
            <?php foreach($errorMessage as $error) :?>
                <?= $error; ?>
            <?php endforeach; ?>
            <div class="form-container">
                <form action="" method="POST">
                    <input type="text" name="id" placeholder="Your identity">
                    <input type="text" name="psw" placeholder="Your password">

                    <button type="submit">Login Now</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
    
    </footer>
   
    <script type="" src=""></script>
</body>
</html>