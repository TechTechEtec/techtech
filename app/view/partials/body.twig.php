<!DOCTYPE html>
<html lang="pt-br" translate>
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
        
        {% block aditionalStyle %}{% endblock %}

        <!-- ON LOAD PAGE -->
        <script>
            $(document).ready(function() { 
                document.querySelector("#loading").setAttribute("style", "display:none");
            })
        </script>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

    <!-- SCRIPT to run the AOS library animation -->
    <script>
        AOS.init();
    </script>

    <!-- SCRIPT to Open Progress Modal  -->
    <script>
        const dialogProgress = document.querySelector('.dialog-scrolling');
        const openButtonProgress = document.querySelector('#showProgressInfo');
        
        let closeButtonProgress = null;

        if(dialogProgress){
            closeButton = dialogProgress.querySelector('sl-button[slot="footer"]');
        }

        if(openButtonProgress && dialogProgress){
            openButtonProgress.addEventListener('click', () => dialogProgress.show());
        }

        if(closeButtonProgress && dialogProgress){
            closeButtonProgress.addEventListener('click', () => dialogProgress.hide());    
        }
    </script>

    <!-- SCRIPT to Open the Avatar modal -->
    <script>
        const dialogAvatar = document.querySelector('.dialog-scrolling');
        const openButtonAvatar = document.querySelector('#chosseAvatar');
        let closeButtonAvatar = null; 

        if(dialogAvatar){
            closeButtonAvatar = dialogAvatar.querySelector('sl-button[slot="footer"]');
        }

        if(openButtonAvatar && dialogAvatar){
            openButtonAvatar.addEventListener('click', () => dialogAvatar.show());
        }

        if(closeButtonAvatar && dialogAvatar){
            closeButtonAvatar.addEventListener('click', () => dialogAvatar.hide());   
        }

        const avatars = document.querySelectorAll(".avatar");

        if(avatars && avatars.length !== 0 && dialogAvatar) {
            avatars.forEach(avatar=> {
                avatar.addEventListener("click", (event)=> {

                    const inputAvatar = document.getElementById("inputAvatar");
                    const chooseAvatar = document.getElementById("chosseAvatar")

                    if(inputAvatar && chooseAvatar){
                        inputAvatar.setAttribute("value", event.target.getAttribute("image"));
                        chooseAvatar.setAttribute("image", event.target.getAttribute("image"));
                    }
                    
                    dialogAvatar.hide();
                })
            })
        }
       
    </script>

    <!-- SCRIPTS TO HIGHLIGHT THE MENU ITEM-->
    <script>
        // This Array must contains the end of real path url used in Menu links
        const urls = ['dashboard', 'playground', 'modules', 'activities', 'configurations', 'help'];

        urls.forEach((url)=> {
            if(window.location.pathname.endsWith(url)){
                const menu_link = document.getElementById(`menu-${url}`);

                if(menu_link){
                    menu_link.style.background = '#7c5cff6a'
                    menu_link.style.borderColor = 'hsl(252, 100%, 68%)';
                }
            }
        })
    </script>
</html>