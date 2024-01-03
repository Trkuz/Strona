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


    
    <title>Irish Red Ale: Ciepło Ogniska w Kieliszku Tradycji</title>
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
        <h1>Irish Red Ale: Ciepło Ogniska w Kieliszku Tradycji</h1>
    </header>

    <main>
        <p>Irish Red Ale to styl piwa, który emanuje ciepłem i przytulnością, przenosząc piwowarstwo Irlandii do kieliszków na całym świecie. Charakteryzuje się subtelnością, równowagą i delikatną słodyczą, tworząc piwo, które kojarzy się z tradycyjnymi irlandzkimi pubami.</p>
        <h2>Aromat:</h2>
        <p>Irish Red Ale powita cię delikatnym aromatem słodów jęczmiennych, gdzie nuty karmelu, chleba i tostów łączą się w harmonijną kompozycję. Subtelne fenole z drożdży dodają głębi i delikatności aromatu.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Czerwono-brązowy kolor piwa emanuje ciepłem i zaprasza do chwili relaksu. Klarowność piwa podkreśla elegancję tradycyjnej receptury.</p>        
        <h2>Smak:</h2>
        <p>Irish Red Ale charakteryzuje się delikatną słodyczą karmelu, biszkoptów i orzechów, balansowaną subtelną goryczką chmielu. Finisz może być lekko suszony, co zachęca do kolejnego łyku.</p>
        <h2>Tekstura:</h2>
        <p>Średnie ciało i umiarkowane nagazowanie sprawiają, że Irish Red Ale jest łatwe do picia. Tekstura jest gładka, a lekkość piwa podkreśla jego sesyjny charakter.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Irish Red Ale ma swoje korzenie w irlandzkich pubach, gdzie stanowi popularny wybór na kranie. To piwo jest często kojarzone z tradycją irlandzkiego piwowarstwa, a także z przyjemnymi chwilami spędzonymi w towarzystwie.</p>


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