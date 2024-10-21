<?php
error_reporting(E_ALL ^ E_NOTICE);  // Tar bort error meddelanden
// Starta sessionen
session_start();

$user = "admin";
    
// Kontrollera om lösenordet är satt via POST
if(isset($_POST['password'])){
    // Kontrollera om användarnamn och lösenord är korrekta
    if($_POST['password']=='12345' && $_POST['username']=='admin'){
        // Om korrekt, sätt en sessionsvariabel för att indikera att användaren är inloggad
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
        // Kontrollera om användaren är inloggad
        if(isset($_SESSION['inLoggad']) && $_SESSION['inLoggad'] == true){
    ?>    
    
<p>Välkommen! Du är inloggad som: <b><?php echo $user; ?></b></p>

    <?php
        } else {
    ?>
    <!-- Om inte inloggad, visa inloggningsformulär -->
    <aside>
        <h1>Viktigt</h1>
        <p>Logga in för att se sidan</p>
    </aside>
    <?php } ?>
</body>
</html>
