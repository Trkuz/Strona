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


    
    <title>Vienna Lager: Elegancja i Zrównoważony Charakter Ziemskiego Piwowarstwa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        header {
            font-family: 'Montserrat', sans-serif;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
            font-size:40px;
            color: #F5F5F5 ;
            text-align:center;
            
        }

        p {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            font-size:20px;
        }
    </style>

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

    <?php if (!isset($_SESSION)): ?> 
        <div class="popup" id ="popup">
            <h1>Muisz się zalogować aby użyć tej funkcji!</h1>

            <button type = "button" onclick = "closePopup()">OK</button>
        </div>
        
        
    <?php endif; ?>    


    <header>
        <h1>Vienna Lager: Elegancja i Zrównoważony Charakter Ziemskiego Piwowarstwa</h1>
    </header>

    <main>
        <p>Vienna Lager to styl piwa, który wywodzi się z niemieckiej tradycji, ale osiągnął swoją popularność przede wszystkim w Meksyku. Charakteryzuje się złocistym kolorem, umiarkowanym ciałem oraz delikatnymi smakami chlebowymi i karmelowymi, tworząc piwo, które łączy w sobie elegancję i ziemską przyjemność.</p>
        <h2>Aromat:</h2>
        <p>Vienna Lager otwiera się subtelnym aromatem słodów karmelowych, chlebowych i delikatnych nut karmelu. Zapach jest łagodny, z nutami lekkiego chmielu i czystości fermentacji.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisty do bursztynowego koloru Vienna Lager emanuje ciepłem i przyjemnością wizualną. Jest zazwyczaj klarowne, co pozwala podziwiać jego iskrzącą jasność.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się umiarkowanym do pełnego ciałem, piwo to przynosi zbalansowany smak chlebowy, biszkoptowy, słodów karmelowych i delikatnej goryczki chmielowej. Nuty orzechowe mogą dodawać dodatkowej warstwy smakowej.</p>
        <h2>Tekstura:</h2>
        <p>Vienna Lager ma zazwyczaj umiarkowane nagazowanie i lekką teksturę, co sprawia, że jest jednocześnie oszałamiająco pijalne i zaspokajające pragnienie.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Styl ten narodził się w Wiedniu, Austrii, gdzie austriaccy piwowarzy wprowadzili nową technologię warzenia lagerów w XIX wieku. Później styl ten zyskał na popularności w Meksyku.</p>


</p>
    </main>

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