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


    
    <title>Wee Heavy: Szkocka Potęga i Elegancja w Każdym Łyku</title>
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
        <h1>Wee Heavy: Szkocka Potęga i Elegancja w Każdym Łyku</h1>
    </header>

    <main>
        <p>Wee Heavy to styl piwa, który ma swoje korzenie w Szkocji, oferując intensywny smak, bogactwo słodów i potężne doznania alkoholowe. Charakteryzuje się głębokim karmelowym profilem, pełnym ciałem i zrównoważonym charakterem, co sprawia, że każdy łyk to prawdziwe piwne arcydzieło.</p>
        <h2>Aromat:</h2>
        <p>Wee Heavy otwiera się intensywnym aromatem karmelu, toffi, suszonych owoców (takich jak figi czy daktyle) oraz delikatnymi nutami orzechowymi. Zapach jest bogaty, z nutą alkoholową w tle.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Brązowy do mahoniowego koloru Wee Heavy emanuje ciepłem i głęboką barwą. Jest często klarowne, co pozwala na podziwianie pięknej przejrzystości.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się pełnym do bardzo pełnego ciałem, piwo to przynosi złożony smak karmelu, melasy, orzechów, a także nut suszonych owoców i delikatnej goryczki. Alkohol jest obecny, ale zazwyczaj jest zrównoważony.</p>
        <h2>Tekstura:</h2>
        <p>Wee Heavy ma gładką i oleistą teksturę, co podkreśla jego pełnię smakową. Jest jednocześnie bogate i łatwe do degustacji, choć zazwyczaj zawiera wyższy poziom alkoholu.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Styl ten wywodzi się z tradycji szkockich piw mocnych, zwanych również "Strong Scotch Ale". Wee Heavy był pierwotnie warzony jako piwo o wyższej zawartości alkoholu, często dla specjalnych okazji.</p>


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