<?php
session_start();
if (isset($_POST['password'])) {
    if ($_POST['password'] == '12345' && $_POST['username'] == 'admin') {
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
        <form method="post">
            Username: <input type="text" name="username" size="20" />
            Password: <input type="password" name="password" size="20" />
            <input type="submit" value="Submit" name="login" />
        </form>

    <?php } ?>
</body>

</html>