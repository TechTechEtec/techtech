<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Fonts Google Preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        <!-- PHOSPOR ICONS --> 
        <script src="https://unpkg.com/phosphor-icons"></script>

        <!-- Tailwind configuration -->
        <script src="{{BASE}}/vendor/tailwindcss.js"></script>

        <!-- CSS Reset -->
        <link rel="stylesheet" href="{{BASE}}/css/global.css" type="text/css"/>
        <title>{% block title %}{% endblock %}</title>
    </head>
    <body class="overflow-x-hidden">
        {% block body %}{% endblock %}  <!-- Here will be included the main body of the page -->
    </body>
</html>