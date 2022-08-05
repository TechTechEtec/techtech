<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body{
            color: #181818;
            background-color: #f0f2f5;
            box-sizing: border-box;
            font-family: 'Arial'
        }
    </style>
</head>
<body>
    <div id="root">
        <?php

            require "../src/services/cURL.php";

            echo fetch_markdown("https://raw.githubusercontent.com/TechTechEtec/techtech-learning-platform/main/content/module/01/index.md") // This function returns the HTML converted
        ?>
    </div>
</body>
</html>