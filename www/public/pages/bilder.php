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
        <h1>Bilder</h1>
        <p>Välkommen till mitt bildgalleri! Här hittar du några av mina favoritbilder.</p> <?php
                                                                                        } else {
                                                                                            ?>

    <?php } ?>
</body>

</html>