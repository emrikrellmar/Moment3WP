
<?php
$user = "admin";
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
    
<p>Välkommen! Du är inloggad som: <b>admin</b></p>

    <?php
        }else{
    ?>
    <aside>
    <h1>Viktigt</h1>
    <p>Logga in för att se sidan</p>
</aside>
    <?php } ?>
</body>
</html>