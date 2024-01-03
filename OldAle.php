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


    
    <title>Old Ale: Złoty Wiek w Kieliszku</title>
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
        <h1>Old Ale: Złoty Wiek w Kieliszku</h1>
    </header>

    <main>
        <p>Old Ale to styl piwa, którego korzenie sięgają tradycji brytyjskiego piwowarstwa. Charakteryzuje się głębokim smakiem, bogactwem słodowym i kompleksowym aromatem. To piwo, które niesie ze sobą historię, kunszt piwowarski i ciepłą nutę wieku.</p>
        <h2>Aromat:</h2>
        <p>Old Ale otwiera się bogatym i złożonym aromatem, gdzie dominują nuty karmelu, toffi, suszonych owoców, melasy, a czasem także drewna, sherry lub porto. Zapach jest głęboki i pełen historii.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Miedziany do brązowego koloru Old Ale emanuje ciepłem i głębokością. Klarowność piwa może się różnić, ale często jest nieprzezroczyste, co dodaje mu tajemniczości.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się pełnym ciałem, Old Ale przynosi złożony smak słodów karmelowych, suszonych owoców (np. figi, daktyle), orzechów i nut sherry. Goryczka jest zazwyczaj umiarkowana, a finisz może być delikatnie słodki.</p>
        <h2>Tekstura:</h2>
        <p>Gęsta i oleista tekstura Old Ale podkreśla jego pełnię smakową. Piwo to jest często rozgrzewające, co sprawia, że idealnie nadaje się do spożywania w chłodniejsze dni.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Old Ale ma swoje korzenie w angielskiej tradycji piwowarskiej, gdzie był warzony jako piwo do leżakowania i starzenia. Jest często powiązane z celebracją i kolekcjonowaniem piwa na specjalne okazje.</p>


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