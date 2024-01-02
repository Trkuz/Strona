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


    
    <title>India Pale Ale (IPA): Eksploracja Chmielu w Każdym Łyku</title>
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
        <h1>India Pale Ale (IPA): Eksploracja Chmielu w Każdym Łyku</h1>
    </header>

    <main>
        <p>India Pale Ale, znane powszechnie jako IPA, to styl piwa, który podbija serca miłośników kraftowego piwowarstwa na całym świecie. To piwo, które zdobyło popularność dzięki intensywnemu aromatowi chmielowemu, wyraźnej goryczce i złożonemu profilowi smakowemu.</p>
        <h2>Aromat:</h2>
        <p>IPA otwiera się intensywnym bukietem chmielowym, w którym dominują nuty cytrusowe, tropikalne owoce, żywica, a czasem nawet kwiatowe akcenty. Aromat jest często złożony i intrygujący.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisty do miedzianego koloru, IPA emanuje ciepłem i energetyczną estetyką. Klarowność piwa może się różnić, od klarownego po mętne, w zależności od interpretacji stylu.</p>        
        <h2>Smak:</h2>
        <p>IPA wyróżnia się wyraźną goryczką chmielową, która jest równoważona słodowym profilem. Smak obejmuje szeroki zakres od cytrusów, melona, mango po sosnowe i ziołowe akcenty. Niektóre IPA mogą być również owocowe czy przyprawowe.</p>
        <h2>Tekstura:</h2>
        <p>Średnie do pełnego ciała, IPA oferuje satysfakcjonującą teksturę. Nagazowanie jest umiarkowane, co podkreśla świeżość i dynamikę tego piwa.</p>
        

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