<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            color: #141414;
            background: #f0f2f5;
            font-family: 'Arial'
        }

        #root h1{
            color: red
        }

        #root h2 {
            color: green
        }

        #root ul:hover {
            color: grey
        }
    </style>

</head>
<body>
    <div id="root">
        <?php

            require "../src/services/cURL.php";

            echo fetch_markdown("https://raw.githubusercontent.com/VictorSilva15/report_screen_esther/main/README.md") // This function returns the HTML converted

        ?>
    </div>
</body>
</html>