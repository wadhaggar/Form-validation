<?php

require "DB/Connect.php";

if($_POST):

$errorMessage = [];

if(isset($_POST['name'],$_POST['lastname'], $_POST['email'], $_POST['psw'], $_POST['psw2'],$_POST['phone'])
    && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email'])
    && !empty($_POST['psw']) && !empty($_POST['psw2']) && !empty($_POST['phone'])){
    
    // Vérifier que l'ardresse mail est valide
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errorMessage[] = "<h3 style='color:red'> Sory that is not an email.";
    }
    // Verifier que les deux mots de passes se correspondent
    if($_POST['psw'] !== $_POST['psw2']){
        $errorMessage[] = "<h3 style='color:red'> The first password must correspond the second one. <h3>";
    }

    if($errorMessage === 0){
        // Ma requête
        $sql = 'INSERT INTO `client`(`client_name`, `client_lastname`, `client_email`, `client_psw`, `client_phone`)
                  VALUES (?,?,?,?,?)';
        $query = $pdo->prepare($sql);
        $query->execute([
            $_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['psw'],$_POST['phone']
        ]);
        //$errorMessage[] = "<h2 style='color:green'> Cool ! successfully registered <a href='index.php'>home page ?<a> </h2>";
        // $errorMessage[] = "Great job ! The user info snet with success to the database <h2>";
        // header("Location: ".$_SERVER['REQUEST_URI']);
        // var_dump($_POST);
        // header('Location: https://www.amazon.com');
        // exit;
        $errorMessage[] = "<h2 style='color:green'> Cool ! successfully registered <a href='index.php'>home page ?<a> </h2>";
    }
}else{
    $errorMessage[] = "<h2 style='color:red'> Veuillez remplir tous les champs <h2>";
    //require "View/Error/error.php";
}
endif;

require "View/contactView.php";