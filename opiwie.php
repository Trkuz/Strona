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


    
    <title>Piwo: Rzemiosło, Historia i Zmysłowe Doznania w Każdym Kufelku</title>
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
        <h1>Piwo: Rzemiosło, Historia i Zmysłowe Doznania w Każdym Kufelku</h1>
    </header>

    <main>
        <p>Piwo to nie tylko napój - to sztuka, tradycja i podróż przez zmysły. Złocisty trunek, który zrodził się tysiące lat temu, przenosząc smakoszy w fascynujący świat różnorodności i kunsztu piwowarstwa. Poznajmy tajniki produkcji tego wyjątkowego napoju!</p>
        <h2>Czym Jest Piwo?</h2>
        <p>Piwo to napój alkoholowy powstały z fermentacji cukrów zawartych w słodzie. Jego podstawowe składniki to woda, słody jęczmienne, chmiele i drożdże. To magiczne połączenie tworzy bogactwo smaków, od orzeźwiających lagerów po złożone ale.</p>

        <h2>Proces Produkcji Piwa:</h2>
        <p>Mieszanie Słodów: Słody jęczmienne są zaczynem piwa. Podczas procesu zacierania, rozdrabnia się je, miesza z wodą, a następnie ogrzewa. Ten proces uwalnia cukry, które staną się pożywką dla drożdży.</p>
        <p>Gotowanie Brzeczki: Powstałą mieszankę, znaną jako brzeczka, gotuje się z dodatkiem chmielu. Chmiele dodają aromatów, goryczki i działają jako naturalny konserwant.</p>
        <p>Chłodzenie Brzeczki: Po gotowaniu brzeczka musi zostać schłodzona przed dodaniem drożdży. To etap kluczowy dla zachowania odpowiednich warunków dla drożdży.</p>
        <p>Fermentacja: Brzeczka jest przenoszona do fermentora, gdzie dodawane są drożdże. Podczas fermentacji drożdże przekształcają cukry w alkohol i dwutlenek węgla.</p>
        <p>Dojrzewanie: Po fermentacji piwo musi dojrzeć, co pozwala na poprawę smaku. Ten proces może trwać od kilku tygodni do kilku miesięcy.</p>
        <p>Butelkowanie i Degustacja: Po dojrzewaniu piwo jest butelkowane, czasami poddawane pasteryzacji lub filtracji. Konsument może wreszcie cieszyć się bogactwem smakowym i aromatycznym piwa.</p>
        <br><br>
        <h2>Dlaczego Warto Spróbować?</h2>
        <p>Produkcja piwa to fascynujące rzemiosło, w którym mistrzowsko łączą się tradycja, technologia i pasja. Od lekkich lagerów po intensywne ales, piwo oferuje niekończącą się różnorodność smaków, które mogą zaspokoić każde podniebienie. Niech każdy łyk będzie wyjątkową podróżą przez kulturę, historię i zmysłowe doznania piwowarstwa. Zapraszamy na kufel pełen smaku i przygód!</p>
        <br>
        <p>jeżeli chcesz Dowidzieć się więcej o piwnych stylach kliknij <a href="stylep.php">tutaj!</a>, jeśli chcesz pocztać o sensoryce, klinkij <a href="sens.php">tutaj!</a></p>


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
