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


    
    <title>Piwo: Podróż przez Świat Zmysłów i Kultur Piwowarskich</title>
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
                <li ><a href="sens.php">Sensoryka</a></li>
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
        <h1>Piwo: Podróż przez Świat Zmysłów i Kultur Piwowarskich</h1>
    </header>

    <main>
        <h2>Rozmaite Style i Charaktery</h2>
        <p>Piwo, podobnie jak sztuka, posiada rozmaite style i charaktery,
             które emanują z różnych regionów i kultur na całym świecie. 
             Od klasycznych niemieckich lagerów po intensywne amerykańskie IPA,piwo jest prawdziwym przedstawicielem kulinarnego rzemiosła.Każdy łyk to możliwość odkrycia unikalnej historii i tradycji związanej z danym stylem piwa.</p>

        <h2>Magia Barw i Klarowności</h2>
        <p>Wylewając piwo do kufelka, zaczynamy podróż od wizualnego zmysłu.
             Złociste jasne piwa mogą kojarzyć się z letnimi dni na plaży, 
             podczas gdy ciemne, mahoniowe trunki kuszą tajemnicą i głębokim
              smakiem. Klarowność piwa staje się nie tylko wyznacznikie jegojakości, ale również elementem estetycznym, ukazującym mistrzostwopiwowara.</p>

        <h2>Aromatyczne Symphony Skomplikowanych Nut</h2>
        <p>Unoszące się z kufelka aromaty piwa są niczym symfonia, w której każda nuta opowiada własną historię. Nuty owocowe, chmielowe, zbożowe, a nawet kawowe – każdy rodzaj piwa oferuje swoje unikalne doznaniazapachowe. Zmysł węchu przenosi nas w podróż przez łąki pełne chmielu,ziołowe ogrody i plantacje zbóż</p>

        <h2>Degustacyjne Poszukiwania</h2>
        <p>Sensoryczne doświadczenie piwa to prawdziwa przyjemność dla podniebienia. Od lekkich i orzeźwiających piw letnich, przez bogate i pełne ciała stouty, aż po kompleksowe i zbalansowane belgijskie ales – każde piwo jest jak podróż przez smakowe krajobrazy. Słodkie, gorzkie, kwaśne czy pikantne - piwo jest paletą smaków, która dostarcza niekończących się doznań.</p>

        <h2>Kreatywność Piwowarów: Nowe Horyzonty Smakowe</h2>
        <p>W dzisiejszych czasach piwowarstwo to nie tylko sztuka tradycji, ale również pole do eksperymentów i innowacji. Piwowarzy sięgają po egzotyczne składniki, dodają do piwa owoce, przyprawy czy nawet kawę, tworząc nowe, zaskakujące style. Piwo staje się płaszczyzną dla artystycznych wyrażeń, gdzie kreatywność i pasja piwowara zaskakują i inspirują.</p>

        <h2>Piwo jako Odkrywcza Podróż</h2>
        <p>W skrócie, piwo to o wiele więcej niż tylko napój alkoholowy. To odkrywcza podróż przez różnorodność smaków, aromatów, historii i kultur. Każdy kufel jest wirtualnym biletem do innych części świata, do miejsc, gdzie tradycja miesza się z nowoczesnością, a kunszt piwowarski staje się formą sztuki. Przyłącz się do tej podróży i pozwól, by piwo stało się dla Ciebie nie tylko trunkiem, ale także fascynującą opowieścią o smaku.

        <p>jeżeli chcesz Dowidzieć się więcej o piwnych stylach kliknij <a href="stylep.php">tutaj!</a>, jeśli chcesz pocztać o produkcji piwa, klinkij <a href="opwie.html">tutaj!</a></p>




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
