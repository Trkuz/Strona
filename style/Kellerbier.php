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


    
    <title>Kellerbier: Łaźnia Piwna Niewybrednej Radości</title>
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
        <h1>Kellerbier: Łaźnia Piwna Niewybrednej Radości</h1>
    </header>

    <main>
        <p>Kellerbier, znane również jako "cellar beer", to niemiecki styl piwa, który wychodzi prosto z piwnic na światło dzienne, prezentując świeżość, naturalność i prostotę piwowarskiego rzemiosła. To piwo zaskakuje swoją autentycznością, nieprzetworzoną klarownością i przyjemnym zrównoważeniem smakowym.</p>
        <h2>Aromat:</h2>
        <p>Kellerbier powita cię świeżym i delikatnym aromatem chmielu, z subtelnymi nutami chlebowymi i biszkoptowymi pochodzącymi od słodów. Aromat jest niewyszukany, ale zaskakująco złożony.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisto-brązowy kolor Kellerbiera emanuje naturalnością i prostotą. Kluczową cechą tego piwa jest często lekka mętność, wynikająca z braku procesów filtracji.</p>        
        <h2>Smak:</h2>
        <p>Kellerbier charakteryzuje się wyraźnym smakiem chmielowym, gdzie delikatna goryczka spotyka się z nutami chleba, karmelu i orzechów. Prostość smaku jest jedną z głównych cech tego piwa.</p>
        <h2>Tekstura:</h2>
        <p>Średnie ciało i umiarkowane nagazowanie sprawiają, że Kellerbier jest łatwe do picia. Tekstura jest gładka, co podkreśla świeżość piwa, jak gdyby było wypite prosto z piwnicy.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Nazwa "Kellerbier" dosłownie oznacza "piwo z piwnicy", co nawiązuje do tradycji picia piwa prosto z piwnic, bez konieczności dodatkowych obróbek czy filtracji.</p>


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