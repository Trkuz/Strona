<?php 
    session_start();

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

            
             <?php if (isset($_SESSION)): ?>
                
                <li ><a href="stylep.php">Style Piwne</a></li>
                <li><a href="opiwie.php">O Piwie</a></li>
                <li ><a href="stylep.php">Sensoryka</a></li>
                <li><a href="wyloguj.php" target="_self" class="logowanie"><?= htmlspecialchars("Wyloguj się!")?></a></li>

            <?php else: ?>
                <li><p  onclick = "openPopup()">Style Piwne</p></li>
                <li><p  onclick = "openPopup()">O Piwie</p></li>
                <li><p  onclick = "openPopup()">Sensoryka</p></li>
                <li><a href="login.php" target = "_self" class = "logowanie">Zaloguj się!</a></li>

            <?php endif; ?>
        </ul>

    </div>
        
    <div class="style">
        <ul>
            <li><a href="Altbier.php">Altbier</a></li>
            <li><a href="BBA.php">Belgian blond ale</a></li>
            <li><a href="BD.php">Belgian dubbel</a></li>
            <li><a href="BerlinerWeisse.php">Berliner weisse</a></li>
            <li><a href="Bitter.php">Bitter</a></li>
            <li><a href="BGA.php">Britsh golden ale</a></li>
            <li><a href="Gose.php">Gose</a></li>
            <li><a href="Grodziskie.php">Grodziskie</a></li>
            <li><a href="IPA.php">India Pale Ale</a></li>
            <li><a href="IRA.php">Irish Red Ale</a></li>
            <li><a href="Lager.php">Jasny Lager</a></li>
            <li><a href="Kellerbier.php">Kellerbier</a></li>
            <li><a href="Doppelbock.php">Doppelbock</a></li>
            <li><a href="ViennaLager.php">Lager wiedeński</a></li>
            <li><a href="LeichBier.php">Leichbier</a></li>
            <li><a href="Marcowe.php">Marcowe</a></li>
            <li><a href="MilkStout.php">Milk stout</a></li>
            <li><a href="Braggot.php">Braggot</a></li>
            <li><a href="Porter.php">Porter Bałtycki</a></li>
            <li><a href="Sahti.php">Sahti</a></li>
            <li><a href="Saison.php">Saison</a></li>
            <li><a href="Rauchmarzen.php">Rauchmarzen</a></li>
            <li><a href="RIS.php">Russian Imperial Stout</a></li>
            <li><a href="WeeHeavy.php">Wee heavy</a></li>
            <li><a href="Weissbier.php">Weissbier</a></li>
            <li><a href="WhileIPA.php">Wheat IPA</a></li>
            <li><a href="Witbier.php">Witbier</a></li>
            <li><a href="CC.php">California Common</a></li>
            <li><a href="OldAle.php">Old Ale</a></li>

        </ul>
    </div>

    <?php if (!isset($_SESSION)): ?> 
        <div class="popup" id ="popup">
            <h1>Muisz się zalogować aby użyć tej funkcji!</h1>

            <button type = "button" onclick = "closePopup()">OK</button>
        </div>
        
        
    <?php endif; ?>    


    
 

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
