<?php

    $is_invalid = false; 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
        $mysqli = require __DIR__ . "/baza.php";
        
        $sql = sprintf("SELECT * FROM user
                        WHERE mail = '%s'",
                        $mysqli->real_escape_string($_POST["mail"]));
        
        $result = $mysqli->query($sql);
        
        $user = $result->fetch_assoc();

        if ($user){

            if (password_verify($_POST["password"], $user["password_hash"])){

                session_start();

                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                header("Location: index.php");
                exit;

            }
        }

        $is_invalid = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">
    <script type ="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
            window.onunload = function(){null;}
    </script>

</head>
<body>
    
<div class="content">

    <div class="box">

        
        <?php if($is_invalid): ?>
            <em>Nieprawidłowe dane logowania</em>
        <?php endif; ?>

        <form action="" method="post">
            <div class="l1">
                <input type="email" placeholder="E-mail" name = "mail"
                 value = "<?= htmlspecialchars($_POST["mail"] ?? "") ?>" >
                       
            </div>
            
            <div class="l2"> 
                <input type="password" placeholder="Hasło" name="password" > </input>
            </div>

            <img src="bomble.png" class = "login-image_2" alt=" "> 

            <div class="l3">
            
            <div class="btn_1">
                <button type="submit" class ="btn_l" >Zaloguj się!</button>
            </div>

            
            </div>

            <div class="l4">
                <a href="rejestracja.html">Nie masz jeszcze konta? Zarejestruj Się!</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>