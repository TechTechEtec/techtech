<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Fonts Google Preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <meta charset="UTF-8"/>

        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="{{BASE}}/svgs/techtechlogo.svg">

        <!-- Fonts --> 
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">

        

        <!-- TAILWIND Import -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <!--AOS-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- PHOSPOR ICONS --> 
        <script src="https://unpkg.com/phosphor-icons"></script>

        <!-- Tailwind configuration -->
        <script src="{{BASE}}/vendor/tailwindcss.js"></script>
        
        <!--Lottie animations-->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <!-- JavaScript files -->
        <script src="{{BASE}}/js/toggleHomeMenu.js"></script>

        <!-- CSS Reset -->
        <link rel="stylesheet" href="{{BASE}}/css/global.css" type="text/css"/>
        <title>{% block title %}{% endblock %}</title>

        <!-- JQUERY TO AJAX REQUESTS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    </head>
    <body class="overflow-x-hidden">
        {% block body %}{% endblock %}  <!-- Here will be included the main body of the page -->
        
    </body>
</html>