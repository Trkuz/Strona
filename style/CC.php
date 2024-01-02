<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="beer-icon-png-2.png">
    <title>Świat Piwa</title>
    <link rel="stylesheet" href="style.css">


    
    <title>California Common: Piwowarski Ducha Zachodniego Wybrzeża w Każdym Kufelku</title>
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
        <h1>California Common: Piwowarski Ducha Zachodniego Wybrzeża w Każdym Kufelku</h1>
    </header>

    <main>
        <p>California Common, znane również jako Steam Beer, to unikalny styl piwa, który przenosi nas na wybrzeże Kalifornii, przywołując ducha dzikiego i niepokornego Zachodu. To piwo charakteryzuje się oryginalnym profilem smakowym i historycznym rodowodem.</p>
        <h2>Aromat:</h2>
        <p>California Common powita cię wyrazistym aromatem chmielowym, w którym dominują nuty ziołowe, cytrusowe i lekko żywiczne. Subtelne fenole z drożdży podkreślają kompleksowość aromatu, tworząc wyjątkową kompozycję.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisty, miedziany kolor Steam Beera emanuje ciepłem i przyjemnością estetyczną. Klarowność tego piwa pozwala cieszyć się jego wyjątkową barwą.</p>        
        <h2>Smak:</h2>
        <p>California Common to zrównoważona kombinacja chmielowej goryczki i słodowego profilu, gdzie lekka słodycz karmelu spotyka się z nutami chmielowymi. Charakterystyczna cecha to również lekkość i odświeżająca wytrawność.</p>
        <h2>Tekstura:</h2>
        <p>Średnie ciało i umiarkowane nagazowanie sprawiają, że California Common jest piwem łatwym do picia. Chociaż może mieć gładką teksturę, to także wyraża pewną surowość, co jest charakterystyczne dla tego stylu.</p>
        <h2>Historia i Tradycja:</h2>
        <p>California Common ma swoje korzenie w czasach Gorączki Złota, kiedy to piwowarzy w Zachodniej Kalifornii warzyli piwo w warunkach, które nie zawsze pozwalały na tradycyjne schłodzenie fermentacji. To doprowadziło do specyficznego charakteru tego piwa, łączącego cechy lagera i ale.</p>


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