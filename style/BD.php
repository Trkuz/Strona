<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">


    
    <title>Belgian Dubbel: Mocne Piwo o Pełnym Charakterze i Subtelnych Nutaach</title>
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
        <h1>Belgian Dubbel: Mocne Piwo o Pełnym Charakterze i Subtelnych Nutaach</h1>
    </header>

    <main>
        <p>Belgian Dubbel to styl piwa, który emanuje zabytkowym urokiem belgijskich klasztorów, gdzie mnisi przez wieki doskonalili sztukę warzenia piwa. To piwo o mocnym charakterze, zrównoważonym smaku i wyjątkowym aromacie, które zaprasza do kontemplacji i relaksu.</p>
        <h2>Aromat:</h2>
        <p>Belgian Dubbel otwiera się intensywnym aromatem ciemnych słodów, karmelu, suszonych owoców i przyjemnych fenoli, które są charakterystyczne dla belgijskich drożdży. Nuty fig, daktyli, rodzynek i lekkie nuty przyprawowe tworzą bogactwo aromatyczne.</p>

        <h2>Kolor i Klarowność:</h2>
        <p>Jego głęboki rubinowo-brązowy kolor wprowadza nas w atmosferę ciepła i elegancji. Belgian Dubbel może być lekko mętne, co tylko dodaje mu charakteru, a klarowność może się różnić w zależności od warzenia.</p>
        
        <h2>Smak:</h2>
        <p>Smak tego piwa jest pełen, z dominującymi nutami karmelu, miodu i ciemnych owoców, takich jak śliwki czy winogrona. Subtelna goryczka kontrastuje z bogactwem słodowym, tworząc pięknie zbalansowany profil smakowy.</p>
        <h2>Tekstura:</h2>
        <p>Belgian Dubbel ma umiarkowane ciało i delikatne nagazowanie. Jego gładka tekstura sprawia, że piwo jest łatwe do picia, mimo intensywnego smaku. Finisz może być lekko słodki, co dodaje piwu aksamitności.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Ten styl piwa ma korzenie w belgijskich klasztorach, gdzie mnisi warzyli piwo jako formę samowystarczalności. Belgian Dubbel to hołd dla ducha monastycyzmu, w którym tradycyjne receptury przekazywane były z pokolenia na pokolenie.</p>


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