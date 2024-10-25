<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

if (isset($_POST['password']) && isset($_POST['username'])) {
    if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
        $_SESSION['inLoggad'] = true;
        $_SESSION['user'] = $_POST['username'];
        session_regenerate_id();
    } elseif ($_POST['password'] == '54321' && $_POST['username'] == 'emrik') {
        $_SESSION['inLoggad'] = true;
        $_SESSION['user'] = $_POST['username'];
        session_regenerate_id();
    } else {
        $error = "Fel användarnamn eller lösenord!";
        session_regenerate_id();
    }
}

?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <title>Sessioner</title>
    <link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    if (isset($error)) {
        echo "<p style='color: red;'><b>$error</b></p>";
        session_regenerate_id();
    }

    if (isset($_SESSION['inLoggad'])) {
        session_regenerate_id();
    ?>
        <p>Välkommen! Du är inloggad som: <b><?php echo isset($_SESSION['user']) ? $_SESSION['user'] : ''; ?></b></p>
        <form id="logout-form" action="inc/logout.php" method="post">
            <button class="logout-button" type="submit">Logga ut</button>
        </form>
    <?php
    } else {
        session_regenerate_id();
    ?>
        <aside>
            <h1>Viktigt</h1>
            <p>Logga in för att se sidorna</p>
        </aside>
    <?php } ?>
</body>

<style>
    .logout-button {
    background-color: white;
    color: black;
    border: 1px solid black;
    border-radius: 4px;
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.2s ease, color 0.2s ease;
}

.logout-button:hover {
    background-color: black;
    color: white;
}

.logout-button:focus {
    outline: none;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}
</style>