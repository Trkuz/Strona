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


    
    <title>White IPA: Harmonia Świeżości i Aromatycznej Intensywności</title>
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
        <h1>White IPA: Harmonia Świeżości i Aromatycznej Intensywności</h1>
    </header>

    <main>
        <p>White IPA to innowacyjny styl piwa, który łączy w sobie elementy tradycyjnej IPA z charakterem białego piwa. To połączenie przynosi świeżość i lekkość białego piwa, równocześnie eksplorując bogactwo chmielowych aromatów i wyrazistej goryczki, charakterystycznych dla India Pale Ale.</p>
        <h2>Aromat:</h2>
        <p>White IPA otwiera się intensywnym aromatem cytrusów, kwiatów, przypraw ziołowych i nut chlebowych. Charakterystyczne dla stylu są również nuty korzenne, które podkreślają złożoność aromatyczną.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Jasnozłoty do pomarańczowego koloru White IPA dodaje mu świeżości i apetycznego wyglądu. Piwo jest zazwyczaj klarowne, co pozwala na podziwianie jego przejrzystości.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się lekkim do średniego ciałem, piwo to przynosi zbalansowany smak chmielowo-cytrusowy, z nutami kolendry, skórki pomarańczowej i lekkiej słodyczy od pszenicy. Goryczka jest wyraźna, ale zazwyczaj umiarkowana.</p>
        <h2>Tekstura:</h2>
        <p>White IPA ma zazwyczaj lekką i orzeźwiającą teksturę, co czyni je idealnym wyborem na ciepłe dni. Wysokie nagazowanie dodaje dodatkowej rześkości.</p>




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