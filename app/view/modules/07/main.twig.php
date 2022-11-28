{% extends "partials/layout.twig.php" %}

{% block title %} Módulo 7 | Techtech {% endblock %}

{% block main %}

    <section class="w-full h-auto flex flex-col items-center justify-center">
        <div class="w-full flex items-center justify-center my-[3rem]" data-aos="fade-up">
            <sl-breadcrumb>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/01">Módulo 1</sl-breadcrumb-item>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/02">Módulo 2</sl-breadcrumb-item>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/03">Módulo 3</sl-breadcrumb-item>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/04">Módulo 4</sl-breadcrumb-item>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/05">Módulo 5</sl-breadcrumb-item>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/06">Módulo 6</sl-breadcrumb-item>
                <sl-breadcrumb-item class="module-summary" href="{{BASE}}modules/07">Módulo 7</sl-breadcrumb-item>
            </sl-breadcrumb>
        </div>

        <div class="items-center justify-center p-4 2sm:px-2 w-full lg:w-[60rem]">     
            <h1 class="text-2xl font-bold font-clean text-purple uppercase px-4 my-8">Módulo 7</h1>

            <img class="" src="{{BASE}}imgs/mindMap/MindMap-07.png" alt="Mapa mental Programação para Web" data-aos="fade-up">

            <div class="w-full flex items-center justify-center md:justify-end gap-[1rem] mt-[2rem]">
                <a href="{{BASE}}imgs/mindMap/MindMap-07.png" download class="font-bold text-lg flex flex-row gap-[1rem] items-center justify-center text-eerie dark:text-grey">
                    <span>Faça o download do mapa aqui!</span>
                    <span class="material-icons">file_open</span>
                </a>
            </div>

            <audio controls class="flex justify-center w-full mt-[2rem] dark:bg-eerie">
                <source src="{{BASE}}audios/modulo7.mp4" type="audio/mp4">
            </audio>

            <div class="px-4" id="content">
                {% apply markdown_to_html %}
                {{ getMarkdown('https://raw.githubusercontent.com/TechTechEtec/modules/main/07/index.md') }}
                {% endapply %}
            </div>

            <hr class="my-8"/>

            <div class="flex flex-row items-center justify-center gap-x-3 lg:gap-x-11 md:gap-x-11 flex-wrap mt-8">
                 <a class="flex font-mukta font-bold text-3xl text-[#0284c7] justify-center items-center text-blue" href="{{BASE}}modules/06"><sl-icon name="arrow-bar-left"></sl-icon> Anterior</a>
                  

                 <a href="{{BASE}}modules/07/exam">
                    <p class="flex items-center justify-center text-xl gap-2 text-eerie dark:text-grey font-mukta font-bold">
                        <i class="ph-exam text-5xl"></i>
                        <span>Exame</span>
                        <i class="ph-arrow-right"></i> 
                    </p>
                 </a>

            </div>
    </section>

    <style>

        #content img {
            margin: 1rem;
            border-radius: 0.35rem;
        }

        .module-summary::part(base)
        {
            font-size: 1.2rem;
            color: #0284c7;
            transition: ease-in 0.2s;
        }

        .module-summary::part(base):hover
        {
            font-size: 1.25rem;
            color: #1094c7;
        }

        #content h2, #content h3 {
            font-family: 'Nerko One', "Mukta", "Roboto", Arial, Helvetica, sans-serif;
            text-transform: uppercase;
        }
            #content h1 {
            font-size: 0.8rem;
            width: 100%;
            text-align: left;
            margin: 1rem 0;
            color: hsl(252, 100%, 68%);
            font-weight: 600;
            font-family: "Mukta", "Roboto", Arial, Helvetica, sans-serif;
        }

        #content h2 {
            font-size: 2rem;
            width: 100%;
            text-align: left;
            margin: 2rem 0 1rem;
            color: #101241;
        }

        html.dark #content h2 {
            color: hsl(281, 100%, 88%)
        }

        #content h3 {
            font-size: 1.6rem;
            width: 100%;
            text-align: left;
            margin: 1rem 0;
            color: #D71C6D;
            font-weight: 600;
        }

        #content p {
            font-size: 1.4rem;
            color: #27242A;
            line-height: 2.5rem;
            width: 95%;
            margin: 1.2rem auto;
            text-align: justify;
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
        }

        html.dark #content p {
            color: #DADDE1
        }

        #content ul, #content ol {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex: 1;
            flex-direction: column;
            gap:0.3rem;
            width: 85%;
            margin: 0.5rem auto;
        }

        html.dark #content ul, html.dark #content ul ol {
            color: #DADDE1
        }

        #content ul {
            list-style:circle;
        }

        #content ol {
            list-style: decimal;
        }

        #content ul li, #content ol li {
            width: 100%;
            height: min-content;
            font-weight: 400;
            font-size: 1.2rem;
        }

        #content ul li p, #content ol li p {
            margin: 0;
            text-align: left;
        }

        #content ul li::marker, #content ol li::marker {
            color:hsl(255, 45%, 41%);
            font-size: 1.5rem;
            font-weight: bolder;
        }

        #content pre {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-direction: column;
            background-color: #FFFFFFdd;
            border-radius: 0.25rem;
            padding:1rem;
            gap:0.7rem;
            width: 90%;
            margin: 0.5rem auto;
        }

        #content pre code {
            font-size: 1rem;
            color: #27242A;
            font-weight: 400;
        }

        #cotent p code {
            font-size: 1.1rem;
            background-color: white;
            font-weight: 400;
        }
    </style>
{% endblock %}
