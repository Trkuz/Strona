<?php

session_start();

if (isset ($_SESSION["user_id"])){

    $mysqli = require __DIR__ . "/baza.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result -> fetch_assoc();

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
    

</head>
<body>



  
<div class="content">

    <div class="nav">
        <ul >
            <?php if (isset($user)): ?>

                <li ><a href="stylep.php"  >Style Piwne</a></li>
                <li><a href="opiwie.php">O Piwie</a></li>
                <li ><a href="sens.php">Sensoryka</a></li>
                <li><a href="wyloguj.php" target="_self" class="logowanie"><?= htmlspecialchars("Wyloguj się!")?></a></li>

            <?php else: ?>
                <li><p  onclick = "openPopup()">Style Piwne</p></li>
                <li><p  onclick = "openPopup()">O Piwie</p></li>
                <li><p  onclick = "openPopup()">Sensoryka</p></li>
                <li><a href="login.php" target = "_self" class = "logowanie">Zaloguj się!</a></li>

            <?php endif; ?>      
        </ul>
    </div>    
     
    <?php if (!isset($user)): ?> 
        <div class="popup" id ="popup">
            <h1>Muisz się zalogować aby użyć tej funkcji!</h1>

            <button type = "button" onclick = "closePopup()">OK</button>
        </div>
        
        
    <?php endif; ?>    


    <div class="piwo">
        <h1>PIWO</h1>
    </div>            


</div>


<script>
let popup = document.getElementById("popup");


function openPopup(){
    popup.classList.add("open-popup");
}

function closePopup(){
    popup.classList.remove("open-popup");
}


</script>

</body>
</html>
