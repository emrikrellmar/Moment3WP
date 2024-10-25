<?php
session_start();

// Inloggning som "admin"
if (isset($_POST['password'])) {
    if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
        $_SESSION['inLoggad'] = true;
        session_regenerate_id();
    }
}

// Inloggning som "emrik"
if (isset($_POST['password'])) {
    if ($_POST['password'] == '54321' && $_POST['username'] == 'emrik') {
        $_SESSION['inLoggad'] = true;
        session_regenerate_id();
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
    if (isset($_SESSION['inLoggad'])) {
    ?>
        <h1>Välkommen till Webbserverprogrammering 1</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga perspiciatis perferendis eum dignissimos assumenda voluptate soluta accusamus, non eligendi? Nemo ut tenetur consequuntur, labore magni facilis eaque adipisci. Earum, in.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. At veniam eos fugiat, ex veritatis exercitationem quasi illum nemo libero? Assumenda delectus magni dolorum pariatur quos rerum, fugit commodi voluptates minima.
        </p>
    <?php
    } else {
    ?>

        <h1>Logga in</h1>
        <form id=loggout method="post">
            Användarnamn: <input type="text" name="username" size="20" />
            Lösenord: <input type="password" name="password" size="20" />
            <input type="submit" value="Logga in" name="login" />
        </form>

    <?php } ?>
</body>

</html>