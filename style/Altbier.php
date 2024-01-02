<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">


    
    <title>Altbier: Tradycyjny Szyk i Wyjątkowa Zrównoważoność Smakowa</title>
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
        <h1>Altbier: Tradycyjny Szyk i Wyjątkowa Zrównoważoność Smakowa</h1>
    </header>

    <main>
        <p>Altbier, dosłownie tłumaczone jako "stare piwo", to niemiecki styl piwa o długiej historii i niezwykłym charakterze. Charakteryzujący się harmonijnym połączeniem nut chmielowych i słodowych, Altbier jest kwintesencją niemieckiego rzemiosła piwowarskiego, oferując piwoszom unikalne doświadczenie smakowe.</p>
        <h2>Aromat:</h2>
        <p>Altbier zachwyca aromatem, w którym dominują nuty chmielowe i słodowe. Delikatne, ziołowe zapachy chmielu mieszały się z subtelnymi nutami karmelu, podkreślając głęboki profil aromatyczny tego stylu.</p>

        <h2>Kolor i Klarowność:</h2>
        <p>Charakterystyczny kolor Altbiera to głęboki bursztyn z rubinowymi refleksami. Klarowność tego piwa podkreśla tradycyjną niemiecką precyzję w procesie warzenia.</p>
        
        <h2>Smak:</h2>
        <p>Altbier oferuje wyjątkową zrównoważoność smakową. Słodycz karmelu i nuty chlebowe kontrastują z umiarkowaną goryczką chmielu, tworząc piwo o harmonijnym i pełnym smaku. Subtelna nuta paloności może pojawić się w tle, dodając kolejny wymiar do kompleksowości smakowej.</p>

        <h2>Tekstura:</h2>
        <p>Piwo to charakteryzuje się średnim ciałem, co sprawia, że jest łatwe w piciu. Mimo pełni smaku, Altbier pozostaje orzeźwiające, co sprawia, że jest popularnym wyborem zarówno dla miłośników piw ciemnych, jak i jasnych.</p>

        <h2>Historia i Tradycja:</h2>
        <p>Altbier ma swoje korzenie w regionie Düsseldorfu w Niemczech. Tradycyjnie warzone w stylu ale, to piwo było fermentowane i leżakowane w nisko temperaturowych piwnicach, co nadawało mu charakterystyczny smak i klarowność. Chociaż niemieckie piwa jasne lager są bardziej powszechne w tym regionie, Altbier pozostaje dumą lokalnej tradycji piwowarskiej.</p>



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
