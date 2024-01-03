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


    
    <title>Porter Bałtycki: Ciemna Elegancja i Potęga Morskich Przemian</title>
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
        <h1>Porter Bałtycki: Ciemna Elegancja i Potęga Morskich Przemian</h1>
    </header>

    <main>
        <p>Porter Bałtycki, często nazywany "Imperialnym Porterem", to styl piwa, który łączy w sobie głęboki charakter Porteru z intensywnością smakową i alkoholową potęgą. Pochodzący z krajów bałtyckich, ten ciemny eliksir przynosi ze sobą nuty kawy, czekolady, owoców suszonych oraz subtelne akcenty słodowego karmelu.</p>
        <h2>Aromat:</h2>
        <p>Porter Bałtycki otwiera się intensywnym aromatem palonych słodów, kawy i gorzkiej czekolady. Nuty suszonych owoców, wanilii i lekko toffi nadają mu złożoność i elegancję.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Głęboko brązowy do czarnego koloru Porter Bałtycki emanuje tajemniczą elegancją. Jest często nieprzezroczysty, co podkreśla jego gęstą i oleistą konsystencję.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się pełnym ciałem, piwo to przynosi intensywny smak palonych słodów, kawy espresso, gorzkiej czekolady i delikatnych nut karmelu. Goryczka jest umiarkowana, a finisz często jest wytrawny.</p>
        <h2>Tekstura:</h2>
        <p>Gęsta, kremowa tekstura Porteru Bałtyckiego otacza podniebienie aksamitnymi falami smaku. Wysokie nagazowanie dodaje lekkości, co sprawia, że piwo jest jednocześnie pełne i pijalne.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Nazwa "Bałtycki" pochodzi od regionu, z którego wywodzi się ten styl. Imperialny Porter był pierwotnie warzony w krajach bałtyckich, a jego nazwa podkreśla potęgę morskich tradycji tego obszaru.</p>


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