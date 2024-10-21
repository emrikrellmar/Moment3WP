<?php
    session_start();
    if(isset($_POST['password'])){
        if($_POST['password']=='12345' && $_POST['username']=='admin'){
            $_SESSION['inLoggad'] = true;    
        }
    }    
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Sessioner</title>
</head>
<body>
    <?php     
        if(isset($_SESSION['inLoggad'])){
    ?>    
        <main>
            <article>
                <h1>Senaste inlägg: "Min första vecka som webbutvecklare"</h>
                <h2><b>Att starta min resa som webbutvecklare har varit både spännande och utmanande. Efter flera månader av studier har jag äntligen börjat mitt första jobb inom branschen, och jag vill dela med mig av mina intryck och vad jag har lärt mig hittills.</b></h2>

                <h3><b>Första dagen </b></h3>
                <p>Den första dagen var som förväntat lite nervös, men jag blev snabbt bekväm när jag mötte mitt team. Alla var vänliga och hjälpsamma, vilket gjorde övergången till arbetslivet mycket lättare.</p>

                <h3>Utmaningar och lärdomar</h3>
                <p>En av de största utmaningarna jag stötte på var att hålla koll på alla nya verktyg och arbetsflöden. Men med tiden och hjälp från kollegor har jag blivit mer bekväm med utvecklingsprocessen.</p>
            </article>
        </main>
    <?php
        }else{
    ?>

    <?php } ?>
</body>
</html>
