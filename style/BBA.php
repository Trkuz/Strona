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
    
    <title>Belgian Blond Ale: Elegancja, Subtelność i Złocisty Blask Tradycji Piwowarskiej</title>
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
        <h1>Belgian Blond Ale: Elegancja, Subtelność i Złocisty Blask Tradycji Piwowarskiej</h1>
    </header>

    <main>
        <p>Belgian Blond Ale to jedna z pereł w bogatym dorobku belgijskiego piwowarstwa, charakteryzująca się wyrafinowanym profilem smakowym, subtelnością i złocistą barwą. To piwo, które zaprasza do smakowania delikatnych niuansów, kładąc nacisk na równowagę między słodem, chmielem, a wyjątkowym belgijskim charakterem drożdży.    </p>
        <h2>Aromat:</h2>
        <p>Belgian Blond Ale otwiera swoje drzwi aromatem świeżych owoców, delikatnych przypraw i charakterystycznej belgijskiej esteryzacji drożdży. Nuty miodu, jabłek, gruszek i lekko fenolowe zapachy tworzą zaproszenie do głębokiego zanurzenia się w smakowitej podróży.</p>

        <h2>Kolor i Klarowność:</h2>
        <p>Złocisty, a nawet pomarańczowy blask Belgian Blond Ale emanuje elegancją i przyjemnością estetyczną. Klarowność tego piwa może się różnić, ale zazwyczaj jest przyjemnie przejrzyste, pozwalając piwoszowi podziwiać jego piękną barwę.</p>
        
        <h2>Smak:</h2>
        <p>Belgian Blond Ale oferuje pełną paletę smakową, gdzie słodycz słodów jest doskonale zrównoważona przez subtelne chmielenie i unikalne charaktery belgijskich drożdży. Nuty kwiatowe, przyprawowe i owocowe przeplatają się, tworząc piwo o wyjątkowym i trwałym posmaku.</p>

        <h2>Tekstura:</h2>
        <p>Średnie ciało i umiarkowane nagazowanie sprawiają, że Belgian Blond Ale jest przyjemnie orzeźwiające. Delikatność tekstury podkreśla subtelność smaków, pozostawiając uczucie lekkości na podniebieniu.</p>

        <h2>Historia i Tradycja:</h2>
        <p>Belgian Blond Ale czerpie inspirację z belgijskich tradycji piwowarskich, jednak wielu piwowarów eksperymentuje, dodając do niego nowoczesne składniki czy interpretacje. To piwo łączy w sobie ducha historii z otwartością na nowe pomysły, co czyni je atrakcyjnym wyborem dla różnych smakoszy piwa.

</p>



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