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
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-drid="">
<form class="uk-form-stacked" js-register>
    <h2> Register</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@example.com">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="your password...">
        </div>
    </div>

    <div class="uk-margin">
        <button class="uk-button uk-button-default" type="submit">Register</button>
    </div>

</form>
    </div>
</div>
<?php require_once "inc/footer.php"; ?>

</body>

</html>
