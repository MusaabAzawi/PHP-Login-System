<?php
    // allow the config
    define('_CONFIG_', true);
    // require the config
    require_once "inc/config.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title of the document</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.10/dist/css/uikit.min.css" />
</head>

<body>
<div class="uk-section uk-container">
    <?php
        echo "Hello World :";
       echo date("D M Y");
    ?>
    <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>

    </p>
</div>
<?php require_once "inc/footer.php"; ?>

</body>

</html>
