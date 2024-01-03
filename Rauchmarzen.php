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


    
    <title>Rauchbier Märzen: Ognista Tradycja W Niedźwiedzim Kufle</title>
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
        <h1>Rauchbier Märzen: Ognista Tradycja W Niedźwiedzim Kufle</h1>
    </header>

    <main>
        <p>Rauchbier Märzen to niemiecki styl piwa, który wyróżnia się intensywnym aromatem i smakiem dymionego słodu. Z głębokim związkiem z tradycją piwowarską Frankonii, to piwo przynosi doznania ognistego klimatu przy ognisku, jednocześnie zachowując pełnię smaku charakterystyczną dla stylu Märzen.</p>
        <h2>Aromat:</h2>
        <p>Rauchbier Märzen otwiera się potężnym aromatem dymionego słodu, przypominającym ognisko czy grill. Nuty karmelu i chleba pochodzące z jasnych słodów równoważą intensywność dymionego charakteru.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisto-brązowy kolor Rauchbier Märzen emanuje ciepłem i zapowiada intensywność smakową. Klarowność piwa może się różnić, ale jest często klarowne, co pozwala na podziwianie głębokości barwy.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się pełnym ciałem, piwo to przynosi wyraźny smak dymionego słodu, który harmonijnie współgra z nutami chleba, karmelu i subtelnej goryczki. To złożone połączenie sprawia, że każdy łyk to prawdziwa przygoda smakowa.</p>
        <h2>Tekstura:</h2>
        <p>Gładka, oleista tekstura Rauchbier Märzen podkreśla jego pełnię smakową. Piwo jest jednocześnie treściwe i orzeźwiające, co czyni je idealnym do spożywania w różnych okolicznościach.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Rauchbier Märzen ma głębokie korzenie w Frankonii, regionie Bawarii, gdzie tradycyjnie warzono to piwo. Jest to ważna część lokalnej kultury piwnej, będąc symbolem regionalnego rzemiosła.</p>


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