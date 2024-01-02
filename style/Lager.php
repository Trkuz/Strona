<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">


    
    <title>Lager: Klasyczna Czystość i Utrzymywana Świeżość</title>
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
        <h1>Lager: Klasyczna Czystość i Utrzymywana Świeżość</h1>
    </header>

    <main>
        <p>Lager to styl piwa, który zdobył światową popularność dzięki swojej czystości, klarowności i zrównoważonemu charakterowi. To piwo, które reprezentuje niemieckie tradycje piwowarskie, ale także stało się symbolem piwowarstwa na całym świecie, podkreślając prostotę i elegancję.</p>
        <h2>Aromat:</h2>
        <p>Lager powita cię delikatnym i subtelnie słodowym aromatem, z nutami chleba, tostów i lekko karmelową słodyczą. Aromat jest niewyszukany, kładąc nacisk na prostotę i czystość.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Jasnożółty do złocistego koloru Lagera emanuje świeżością i lekkością. Klarowność piwa jest jedną z kluczowych cech, co podkreśla czystość i precyzję w procesie warzenia.</p>        
        <h2>Smak:</h2>
        <p>Lager charakteryzuje się łagodnym smakiem słodowym, gdzie subtelne nuty chmielowe równoważą delikatną słodycz. Goryczka jest umiarkowana, a finisz jest czysty, zachęcający do kolejnego łyku.</p>
        <h2>Tekstura:</h2>
        <p>Lager ma lekkie do średniego ciała, co sprawia, że jest lekko pijalny. Umiarkowane nagazowanie dodaje świeżości, a gładka tekstura podkreśla elegancję tego piwa.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Lager ma swoje korzenie w Niemczech, gdzie został po raz pierwszy uwarzony w XIX wieku. Tradycyjnie warzony w niskich temperaturach, co przyczynia się do jego czystości i klarowności.</p>


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