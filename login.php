<?php
require "DB/Connect.php";
// require "View/Error/error.php";
// Variable qui affiche mes messages d'erreur
$errorMessage = [];
if(isset($_POST['id'], $_POST['psw'])
    && !empty($_POST['id']) && ($_POST['psw'])){

    // Ma requête
    $sql = 'SELECT `user_psw` 
            FROM `user` 
            WHERE `user_psw`=?';
    $query = $pdo->prepare($sql);
    $query->execute([
        $_POST['psw']
    ]);
    $loginfo =$query->fetchColumn();
    
    if($_POST['psw']){
        password_hash($_POST['psw'], $loginfo);
    }

    if(password_verify($_POST['psw'], $loginfo)){

        echo "Successfully loged in";
    }else{
        echo "password not correct";
    }

   // var_dump($loginfo);

}else{
    // echo $_POST['id'].$_POST['psw']."plz fill all the fields";
    
    $errorMessage[] = "<h2 style='color:red; text-align:'>please fill up all the fields";
}

require "View/loginView.php";