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


    
    <title>Gose: Morska Świeżość z Przyprawowym Akcentem</title>
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
        <h1>Gose: Morska Świeżość z Przyprawowym Akcentem</h1>
    </header>

    <main>
        <p>Gose to niemiecki styl piwa, który czerpie inspirację z tradycji regionu Lipska, oferując unikalne połączenie świeżości, kwasowości i lekko przyprawowej charakterystyki. To piwo, które wyłamuje się ze standardowych konwencji, przynosząc ze sobą morski smak i orzeźwiające doświadczenie.</p>
        <h2>Aromat:</h2>
        <p>Gose kusi zmysły świeżym i owocowym aromatem, gdzie nuty cytrusowe, jak limonka i cytryna, miesza się z delikatnymi zapachami korzeni koriandru. To zaproszenie do eksploracji zróżnicowanego bukietu aromatycznego.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Jasnożółty do pomarańczowego koloru Gose emanuje świeżością, przypominając kolor morskich zachodów słońca. Klarowność może się różnić, ale często piwo jest lekko mętne.</p>        
        <h2>Smak:</h2>
        <p>Gose wyróżnia się delikatną kwasowością, która jest równoważona solankowym posmakiem. Dodatek soli i korzenia koriandru nadaje mu wyjątkową charakterystykę smakową, podkreślając morski profil piwa.</p>
        <h2>Tekstura:</h2>
        <p>Lekkie do średniego ciała i umiarkowane nagazowanie sprawiają, że Gose jest piwem niezwykle orzeźwiającym. Tekstura jest gładka, a finisz często wytrawny, co sprawia, że piwo jest łatwe do picia.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Gose ma swoje korzenie w Lipsku, Niemczech, gdzie było tradycyjnie warzone z wodą słoną z pobliskiego rzecznego źródła. Współcześnie, piwowarze na całym świecie eksperymentują z tym stylem, wprowadzając różnorodne dodatki.</p>


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