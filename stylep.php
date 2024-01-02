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
                
                <li ><a href="stylep.php">Style Piwne</a></li>
                <li><a href="opiwie.php">O Piwie</a></li>
                <li ><a href="stylep.php">Sensoryka</a></li>
                <li><a href="wyloguj.php" target="_self" class="logowanie"><?= htmlspecialchars($user["name"])?></a></li>

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
            <li><a href="style/Altbier.php">Altbier</a></li>
            <li><a href="style/BBA.php">Belgian blond ale</a></li>
            <li><a href="style/BD.php">Belgian dubbel</a></li>
            <li><a href="style/BerlinerWeisse.php">Berliner weisse</a></li>
            <li><a href="style/Bitter.php">Bitter</a></li>
            <li><a href="style/BGA.php">Britsh golden ale</a></li>
            <li><a href="style/Gose.php">Gose</a></li>
            <li><a href="style/Grodziskie.php">Grodziskie</a></li>
            <li><a href="style/IPA.php">India Pale Ale</a></li>
            <li><a href="style/IRA.php">Irish Red Ale</a></li>
            <li><a href="style/Lager.php">Jasny Lager</a></li>
            <li><a href="style/Kellerbier.php">Kellerbier</a></li>
            <li><a href="style/Doppelbock.php">Doppelbock</a></li>
            <li><a href="style/ViennaLager.php">Lager wiedeński</a></li>
            <li><a href="style/LeichBier.php">Leichbier</a></li>
            <li><a href="style/Marcowe.php">Marcowe</a></li>
            <li><a href="style/MilkStout.php">Milk stout</a></li>
            <li><a href="style/Braggot.php">Braggot</a></li>
            <li><a href="style/Porter.php">Porter Bałtycki</a></li>
            <li><a href="style/Sahti.php">Sahti</a></li>
            <li><a href="style/Saison.php">Saison</a></li>
            <li><a href="style/Rauchmarzen.php">Rauchmarzen</a></li>
            <li><a href="style/RIS.php">Russian Imperial Stout</a></li>
            <li><a href="style/WeeHeavy.php">Wee heavy</a></li>
            <li><a href="style/Weissbier.php">Weissbier</a></li>
            <li><a href="style/WhileIPA.php">Wheat IPA</a></li>
            <li><a href="style/Witbier.php">Witbier</a></li>
            <li><a href="style/CC.php">California Common</a></li>
            <li><a href="style/OldAle.php">Old Ale</a></li>

        </ul>
    </div>

    <?php if (!isset($user)): ?> 
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
