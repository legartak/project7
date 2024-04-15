<?php
    $name = 'Yehor';
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Myself Page</title>
        <style>
            html {
                background-color: orange;
            }
            .title {
                background-color: green;
                border: 5px firebrick solid;
            }
            .attention {
                color: red;
                background-color: black;
            }
            p {
                color: white;
            }
        </style>
    </head>
    <body>
        <h1 class="title">Hi! I am <?php echo($name)?></h1>
        <p>I am studying Software Development and it's my first steps in PHP/Laravel</p>
        <p class="attention">I know, that this is blade-file but I ll make everything as needed step by step</p>
    </body>
</html>

