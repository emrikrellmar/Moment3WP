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
                <h1>Kontakta mig</h1>
                <form action="kontakt-process.php" method="post">
                    <label for="name">Namn:</label>
                    <input type="text" id="name" name="name" placeholder="Ditt namn" required>

                    <label for="email">E-post:</label>
                    <input type="email" id="email" name="email" placeholder="Din e-postadress" required>

                    <label for="message">Meddelande:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Skriv ditt meddelande här" required></textarea>

                    <input type="submit" value="Skicka">
                </form>
            </section>
        </main>    <?php
        }else{
    ?>
    <form method="post">
       Username: <input type="text" name="username" size="20" />
       Password: <input type="password" name="password" size="20" />
       <input type="submit" value="Submit" name="login"/>
    </form>
	
    <?php } ?>
</body>
</html>
