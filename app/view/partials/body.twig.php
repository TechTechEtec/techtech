<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Fonts Google Preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Meta -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" href="{{BASE}}svgs/techtechlogo.svg">

        <!-- Fonts --> 

        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600;700&family=Nerko+One&family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
    
        <!-- TAILWIND Import -->
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

        <!--AOS-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- PHOSPOR ICONS --> 
        <script src="https://unpkg.com/phosphor-icons"></script>

        <!-- Tailwind configuration -->
        <script src="{{BASE}}vendor/tailwindcss.js"></script>
        
        <!--Lottie animations-->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <!-- JavaScript files -->
        <script src="{{BASE}}js/toggleHomeMenu.js"></script>
        <script src="{{BASE}}js/toggleMenu.js"></script>

        <!-- CSS Reset -->
        <link rel="stylesheet" href="{{BASE}}css/global.css" type="text/css"/>
        <title>{% block title %}{% endblock %}</title>

        <!-- JQUERY TO AJAX REQUESTS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- TALLY FORMS -->
        <script async src="https://tally.so/widgets/embed.js"></script>

        <!-- COMPONENTS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.83/dist/themes/light.css" />
        <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.83/dist/shoelace.js"></script>
 
        <!-- ON LOAD PAGE -->
        <script>
            $(document).ready(function() { 
                document.querySelector("#loading").setAttribute("style", "display:none");
            })
        </script>

        {% block customStyle %}{% endblock %}
    </head>
    
    <body class="overflow-x-hidden">

        <div id="loading">
        <img class="w-full h-full max-w-[80px] max-h-[80px]" src="{{BASE}}svgs/loading.svg" alt="loading spinner"/>
            Carregando ...
        </div> 

        {% block menu %}{% endblock %}
        {% block body %}{% endblock %}  <!-- Here will be included the main body of the page -->
    </body>

    <script src="https://cdn.jsdelivr.net/npm/ace-builds@1/src-noconflict/ace.min.js"></script>
    <script  src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- SCRIPT to Open Progress Modal  -->
    <script>
        const dialog = document.querySelector('.dialog-scrolling');
        const openButton = document.querySelector('#showProgressInfo');
        const closeButton = dialog.querySelector('sl-button[slot="footer"]');

        openButton.addEventListener('click', () => dialog.show());
        closeButton.addEventListener('click', () => dialog.hide());       
    </script>

    <!-- SCRIPT to Open the Avatar modal -->

    <script>
        const dialog = document.querySelector('.dialog-scrolling');
        const openButton = document.querySelector('#chosseAvatar');
        const closeButton = dialog.querySelector('sl-button[slot="footer"]');

        openButton.addEventListener('click', () => dialog.show());
        closeButton.addEventListener('click', () => dialog.hide());

        const avatars = document.querySelectorAll(".avatar");

        avatars.forEach(avatar=> {
            avatar.addEventListener("click", (event)=> {
                
                document.getElementById("inputAvatar").setAttribute("value", event.target.getAttribute("image"));
                document.getElementById("chosseAvatar").setAttribute("image", event.target.getAttribute("image"));

                dialog.hide();
            })
        })
    </script>

    <!-- SCRIPTS TO HIGHLIGHT THE MENU ITEM-->
    <script>

        // This Array must contains the end of real path url used in Menu links
        const urls = ['dashboard', 'modules', 'activities', 'configurations', 'help'];

        urls.forEach((url)=> {
            if(window.location.pathname.endsWith(url)){
                const menu_link = document.getElementById(`menu-${url}`);

                menu_link.style.background = '#7c5cff6a'
                menu_link.style.borderColor = 'hsl(252, 100%, 68%)';
            }
        })

    </script>

</html>