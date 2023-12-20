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
                <li><a href="#">O Piwie</a></li>
                <li ><a href="#">Sensoryka</a></li>
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
            <li>Altbier</li>
            <li>Belgian blond ale</li>
            <li>Belgian dubbel</li>
            <li>Berliner weisse</li>
            <li>Bitter</li>
            <li>Britsh golden ale</li>
            <li>Festbie</li>
            <li>Gose</li>
            <li>Grodziskie</li>
            <li>India Pale Ale</li>
            <li>Irish Red Ale</li>
            <li>Jasny Lager</li>
            <li>Kellerbier</li>
            <li>Doppelbock</li>
            <li>Lager wiedeński</li>
            <li>Leichbier</li>
            <li>Marcowe</li>
            <li>Milk stout</li>
            <li>Braggot</li>
            <li>Porter Bałtycki</li>
            <li>Sahti</li>
            <li>Saison</li>
            <li>Rauchmaerzen</li>
            <li>Russian Imperial Stout</li>
            <li>Wee heavy</li>
            <li>Weissbier</li>
            <li>Wheat IPA</li>
            <li>Witbier</li>
            <li>California Common</li>
            <li>Old Ale</li>

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