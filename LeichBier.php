<?php 
    session_start(); #Rozpoczyna kolejną sesje po otwarciu strony

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


    
    <title>Leichtbier: Lekkość Zbalansowana Z Charakterem</title> 
    <style> /*arkusz stylów dla tej konkretnej podstrony */

        header {
            font-family: 'Montserrat', sans-serif; /* Ustawianie czcionki na Monsterrat, typ sans-serif */
            background-color: #333; /* Ustawiane koloru tła */
            color: #fff; /* ustawianie koloru czcionki */
            text-align: center; /* wyrównanie tekstu do środka */
            padding: 20px; /* ustawienie paddingu */
        }

        main {
            max-width: 100%; /* ustawienie szerokości strony */
            margin: 20px auto; /* ustawienie marginesów strony */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* ustawienie ramki oraz cienia */
            border-radius: 8px; /* ustawinie zaokrąglnia rogów obramowania */
            
        }

        h2 {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            border-bottom: 2px solid black; /* tworzenie podkreślenia tekstu */
            padding-bottom: 10px; /* ustwanie paddingu dolnego */
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
            <?php if (isset($_SESSION)):  ?> <!-- ten kod sprawia że poniższy blok wykonuje się tylko dla aktywnej sesji(jeżeli użytkownik jest zalogowany) -->
                
                <li ><a href="stylep.php">Style Piwne</a></li> <!--Dodawanie odnośnika do podstrony Style Piwne-->
                <li><a href="opiwie.php">O Piwie</a></li><!--Dodawanie odnośnika do podstrony O Piwie-->
                <li ><a href="stylep.php">Sensoryka</a></li><!--Dodawanie odnośnika do podstrony Sensoryka-->
                <li><a href="wyloguj.php" target="_self" class="logowanie"><?= htmlspecialchars("Wyloguj się!")?></a></li> <!-- Dodawanie opcji wylogowania się -->

            <?php else: ?> <!-- Poniższy blok kodu wykonuje się tylko jeżeli użytkownik jest zalogowany (Sesja jest aktywna)-->
                <li><p  onclick = "openPopup()">Style Piwne</p></li>
                <li><p  onclick = "openPopup()">O Piwie</p></li><!-- Po kliknięiu aktywuje funkcję openPopup(), wyświetlającej komunikat-->
                <li><p  onclick = "openPopup()">Sensoryka</p></li>
                <li><a href="login.php" target = "_self" class = "logowanie">Zaloguj się!</a></li> <!-- Dodawanie opcji zalogowania się -->

            <?php endif; ?>
        </ul>
        
        

    </div>

    <?php if (!isset($_SESSION)): ?> <!-- Kod wykonuje się jeżeli użytkownik nie jest zalogowany-->

        <!-- Tworzenie popupa wraz z prziskiem "ok"-->

        <div class="popup" id ="popup">
            <h1>Muisz się zalogować aby użyć tej funkcji!</h1> 

            <button type = "button" onclick = "closePopup()">OK</button> <!--Tworzenie przycisku, który aktywuję funkcję colsePopup() która zamyka komunikat-->
        </div>
        
        
    <?php endif; ?>    


    <header>
        <h1>Leichtbier: Lekkość Zbalansowana Z Charakterem</h1> <!--Główny nagłówek artykułu-->
    </header>

    <main> <!--Część główna artykułu-->
        <p>Leichtbier, co w dosłownym tłumaczeniu oznacza "lekkie piwo", to styl, który kieruje się ku zrównoważonej lekkości, jednocześnie utrzymując delikatny, pełny smak. To piwo stworzone dla tych, którzy pragną orzeźwienia, nie rezygnując jednak z charakterystycznego doświadczenia piwnego.</p>
        <h2>Aromat:</h2>
        <p>Leichtbier powita cię subtelnością aromatu, z delikatnymi nutami chleba, ziół i lekkością słodową. Aromat jest lekki, ale nie pozbawiony charakteru.</p>
        <h2>Kolor i Klarowność:</h2>
        <p>Złocisty do jasnozłotego koloru Leichtbiera emanuje radością i lekkością. Klarowność piwa podkreśla elegancję stylu.</p>        
        <h2>Smak:</h2>
        <p>Charakteryzujące się lekkością, Leichtbier prezentuje subtelny smak słodowy, z nutami chleba i lekką goryczką chmielową. Jest to piwo, które oferuje rześkie doznania, pozostawiając jednocześnie wrażenie pełni smaku.</p>
        <h2>Tekstura:</h2>
        <p>Lekkie ciało i wysokie nagazowanie sprawiają, że Leichtbier jest niezwykle orzeźwiające. Tekstura jest gładka, co podkreśla przyjemność picia tego piwa.</p>
        <h2>Historia i Tradycja:</h2>
        <p>Leichtbier ma swoje korzenie w niemieckiej tradycji piwowarskiej, gdzie jest cenione za swoją pijalność i umiarkowaną zawartość alkoholu.</p>
</p>
    </main>

</div>

<script>
let popup = document.getElementById("popup"); //tworzenie zmiennej popup która jest elemnetem, o id popup, utworzonym wcześniej (div komunikat)
                                              // w tym przpadku chodzi głównie o przycisk który steruje zamykaniem komunikatu

//funkcja openPopup() wyświetlająca komunkiat:
function openPopup(){
    popup.classList.add("open-popup"); //nadawanie elementowi klasy open-popup
}

//funkcja closePopup() zamykająca komunkiat:
function closePopup(){
    popup.classList.remove("open-popup"); //"odbieranie" elementowy klasy open-popup
}


</script>

</body>
</html>