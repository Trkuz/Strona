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


    
    <title>Piwo Marcowe: Radosne Świętowanie Tradycji Niemieckiego Piwa</title>
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
        <h1>Piwo Marcowe: Radosne Świętowanie Tradycji Niemieckiego Piwa</h1>
    </header>

    <main>
        <p>Piwo Marcowe, znane również jako Märzen, to niemiecki styl piwa, którego korzenie sięgają tradycji i radości świątecznych. Charakteryzuje się pełnym ciałem, zbalansowanym smakiem słodowym i subtelną goryczką, tworząc piwo idealne do celebracji i wspólnego świętowania.</p>
        <h2>Aromat:</h2>
        <p>Piwo Marcowe otwiera się bogatym aromatem słodów, z nutami karmelu, toffi i lekko palonego chleba. Aromatyczne fenole z drożdży dodają głębokości bukietowi piwa.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisto-brązowy kolor Märzenu emanuje ciepłem i przytulnością, przywodząc na myśl barwy jesiennego krajobrazu. Klarowność piwa podkreśla elegancję stylu.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się pełnym smakiem słodowym, Piwo Marcowe przynosi nuty karmelu, miodu i pieczonego chleba. Goryczka jest umiarkowana, równoważąc słodycz i nadając piwu złożony smakowy profil.</p>
        <h2>Tekstura:</h2>
        <p>Pełne do bardzo pełnego ciała oraz umiarkowane nagazowanie sprawiają, że Piwo Marcowe jest treściwe i satysfakcjonujące w picu. Tekstura jest gładka, co podkreśla intensywność smakową piwa.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Tradycyjnie warzone jako piwo świąteczne na przełomie września i października, Märzen było poddawane procesowi lagerowania w piwnicach przez kilka miesięcy, nadając mu dojrzałość i klarowność.</p>


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