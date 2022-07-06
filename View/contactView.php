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
        <main id="main-contact">
            <div class="container">
                <h2>Register now for more information</h2>
                <div class="show-error">
                    <?php foreach($errorMessage as $error) :?>
                        <?= $error; ?>
                    <?php endforeach; ?>
                </div>
                <div class="form-container">
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Your name *">
                        <input type="text" name="lastname" placeholder="Your family-name *">
                        <input type="text" name="email" placeholder="Your email *">
                        <input type="password" name="psw" placeholder="Your password *">
                        <input type="password" name="psw2" placeholder="Confirm your password" *>
                        <input type="tel" name="phone" placeholder="Phone number (optional)">

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