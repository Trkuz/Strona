<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">


    
    <title>Doppelbock: Moc i Elegancja w Niemieckim Wydaniu</title>
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
        <h1>Doppelbock: Moc i Elegancja w Niemieckim Wydaniu</h1>
    </header>

    <main>
        <p>Doppelbock, znany również jako "double bock", to potężny niemiecki styl piwa, który kusi zrównoważeniem potężnej mocy i wyjątkowej elegancji smaku. To piwo, które wywodzi się z długiej tradycji niemieckiego piwowarstwa, oferując intensywność i głębokość smaku.</p>
        <h2>Aromat:</h2>
        <p>Doppelbock otwiera się intensywnym aromatem słodów, w którym dominuje nuta karmelu, toffee i ciemnych owoców. W tle wyczuwalne są subtelne nuty palone i chmielowe, dodające kompleksowości bukietu.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisto-brązowy do ciemnobrązowego koloru Doppelbocka emanuje ciepłem i bogactwem. Klarowność może się różnić, ale często jest gęste i mętne, co dodaje mu charakteru.</p>        
        <h2>Smak:</h2>
        <p>Doppelbock uderza potężnym smakiem słodowym, gdzie głęboka słodycz karmelu, miodu i toffee równoważona jest delikatną nutą paloną. W smaku pojawiają się również subtelne akcenty chmielowe, nadające piwu złożoność.</p>
        <h2>Tekstura:</h2>
        <p>Charakteryzujący się pełnym do bardzo pełnego ciałem, Doppelbock prezentuje gładką i aksamitną teksturę. Wysokie nagazowanie podkreśla bogactwo piwa, jednocześnie utrzymując równowagę.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Doppelbock ma korzenie w niemieckiej tradycji piwnej, zwłaszcza w monastycznym warzeniu piwa przez zakony. Tradycyjnie spożywane podczas okresów postu, stało się popularnym stylem piwa również poza ramami religijnymi.</p>


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