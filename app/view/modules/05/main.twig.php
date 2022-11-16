{% extends "partials/layout.twig.php" %}

{% block title %} Módulo 04 | Techtech {% endblock %}

{% block main %}

     <main class="w-screen h-auto bg-[url({{BASE}}svgs/background.svg)] bg-repeat-y bg-center relative overflow-x-hidden">
       <div class="items-center justify-center lg:ml-[14rem] md:ml-[5rem]  md:mr-[5rem]">
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

        <div class="items-center justify-center w-[25rem] lg:w-[60rem] md:w-[40rem] lg:ml-[9rem] md:ml-[3rem] bg-white">    
            <h1 class="text-2xl font-bold font-clean text-purple uppercase px-4 my-8">Módulo 1</h1>

            <div class="px-4" id="content">
                {% apply markdown_to_html %}
                    {{ getMarkdown('https://raw.githubusercontent.com/TechTechEtec/modules/main/05/index.md') }}
                {% endapply %}
            </div>

            <div class="flex flex-row">
                <a href><p class="flex justify-center items-center font-mukta font-bold"><sl-icon-button name="file-text" label="Edit" style="font-size: 2.5rem;"></sl-icon-button>Exame <sl-icon name="arrow-right-short"></sl-icon></p></a>
            </div>

            <div class="flex flex-row gap-x-3 lg:gap-x-96 md:gap-x-96 font-mukta font-bold text-2xl justify-center items-center text-blue mt-[2rem]">
                <p class="justify-center items-center"><a href="{{BASE}}modules/04"><sl-icon name="arrow-bar-left"></sl-icon> Anterior</a></p>
                <p><a href="{{BASE}}modules/06">Próximo <sl-icon name="arrow-bar-right"></sl-icon></a></p>
            </div>
        </div>
 <main>
    
    <style>
        .module-summary::part(base)
        {
            font-size: 1.2rem;
            
        }
        #content h2, #content h3 {
            font-family: 'Nerko One', "Mukta", "Roboto", Arial, Helvetica, sans-serif;
            text-transform: uppercase;
        }
        #content h1 {
            font-size: 2.8rem;
            width: 100%;
            text-align: left;
            margin: 1rem 0;
            color: hsl(252, 100%, 68%);
            font-weight: 600;
            font-family: "Mukta", "Roboto", Arial, Helvetica, sans-serif;;
        }

        #content h2 {
            font-size: 2rem;
            width: 100%;
            text-align: left;
            margin: 1rem 0;
            color: #101241;
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
            color: #181818;
            line-height: 2.5rem;
            width: 95%;
            margin: 1.2rem auto;
            text-align: justify;
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
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
            gap:0.7rem;
            width: 85%;
            margin: 0.5rem auto;
        }

        #content pre code {
            font-size: 1rem;
            color: #181818;
            font-weight: 400;
        }

        #cotent p code {
            font-size: 1.1rem;
            color: hsl(252, 100%, 68%);
            font-weight: 400;
        }
    </style>
{% endblock %}
