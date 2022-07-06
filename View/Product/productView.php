<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pordcut</title>

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
            <h1>Check our availabe products</h1>
            <?php foreach($errorMessage as $error) :?>
                <?= $error; ?>
            <?php endforeach; ?>
            
        </div>
    </main>
    <footer>
    
    </footer>
   
    <script type="" src=""></script>
</body>
</html>