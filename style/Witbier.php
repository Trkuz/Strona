<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">


    
    <title>Witbier: Delikatna Świeżość Belgii w Każdym Łyku</title>
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
            <?php if (isset($user)): ?>
                
                <li ><a href="stylep.php">Style Piwne</a></li>
                <li><a href="opiwie.php">O Piwie</a></li>
                <li ><a href="stylep.php">Sensoryka</a></li>
                <li><a href="wyloguj.php" target="_self" class="logowanie"><?= htmlspecialchars($user["name"])?></a></li>

            <?php else: ?>
                <li><p  onclick = "openPopup()">Style Piwne</p></li>
                <li><p  onclick = "openPopup()">O Piwie</p></li>
                <li><p  onclick = "openPopup()">Sensoryka</p></li>
                <li><a href="login.php" target = "_self" class = "logowanie">Zaloguj się!</a></li>

            <?php endif; ?>
        </ul>
        
        

    </div>

    <?php if (!isset($user)): ?> 
        <div class="popup" id ="popup">
            <h1>Muisz się zalogować aby użyć tej funkcji!</h1>

            <button type = "button" onclick = "closePopup()">OK</button>
        </div>
        
        
    <?php endif; ?>    


    <header>
        <h1>Witbier: Delikatna Świeżość Belgii w Każdym Łyku</h1>
    </header>

    <main>
        <p>Witbier, znane również jako Belgian White Ale, to styl piwa, który pochodzi z Belgii, znany ze swojej lekkości, owocowej świeżości i delikatnej gładkości. Charakteryzuje się subtelnością słodów jęczmiennych, nutami przypraw z dodatkiem skórki pomarańczowej i kolendry, co tworzy piwo idealne dla tych, którzy poszukują łagodnego, orzeźwiającego doświadczenia.</p>
        <h2>Aromat:</h2>
        <p>Witbier otwiera się świeżym i lekkim aromatem cytrusów, skórki pomarańczowej, goździków i kolendry. Zapach jest delikatny, ale jednocześnie intrygujący, przywodzący na myśl słoneczne dni i letnią świeżość.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Bladożółty kolor Witbiera sprawia, że wygląda jak promienne słońce w szklance. Piwo jest zazwyczaj mętne, co dodaje mu charakterystycznego, nieco mglistego wyglądu.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się lekkim do średniego ciałem, piwo to przynosi delikatny smak słodów jęczmiennych, skórki pomarańczowej, kolendry i nuty goździków. Goryczka jest niska, co sprawia, że piwo jest niezwykle przyjemne w degustacji.</p>
        <h2>Tekstura:</h2>
        <p>Witbier ma lekką i orzeźwiającą teksturę, co sprawia, że jest doskonałym wyborem na ciepłe dni. Wysokie nagazowanie podkreśla jego lekkość.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Styl ten ma korzenie w belgijskich tradycjach piwowarskich, gdzie jest warzone od wielu lat. Witbier jest również powiązane z rytuałami i tradycjami letnich festiwali.</p>


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