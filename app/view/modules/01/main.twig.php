{% extends "partials/layout.twig.php" %}

{% block title %} Módulo 1 | Techtech {% endblock %}

{% block main %}

 <main class="w-screen h-auto bg-[url({{BASE}}svgs/background.svg)] bg-repeat-y bg-center relative overflow-x-hidden">
        <sl-breadcrumb>
            <sl-breadcrumb-item href="{{BASE}}modules/01">Módulo 1</sl-breadcrumb-item>
            <sl-breadcrumb-item href="{{BASE}}modules/02">Módulo 2</sl-breadcrumb-item>
            <sl-breadcrumb-item href="{{BASE}}modules/03">Módulo 3</sl-breadcrumb-item>
            <sl-breadcrumb-item href="{{BASE}}modules/04">Módulo 4</sl-breadcrumb-item>
            <sl-breadcrumb-item href="{{BASE}}modules/05">Módulo 5</sl-breadcrumb-item>
            <sl-breadcrumb-item href="{{BASE}}modules/06">Módulo 6</sl-breadcrumb-item>
            <sl-breadcrumb-item href="{{BASE}}modules/07">Módulo 7</sl-breadcrumb-item>
        </sl-breadcrumb>

        <div class="items-center justify-center w-[60rem] ml-[10rem] bg-white">    
            <h1 class="text-4xl font-bold font-clean text-purple uppercase mx-4 my-8">Módulo 1</h1>

            <div class="px-6 py-4" id="content">
                {% apply markdown_to_html %}
                    {{ getMarkdown('https://raw.githubusercontent.com/TechTechEtec/modules/main/01/index.md') }}
                {% endapply %}
            </div>

            <div class="flex flex-row bottom-0 right-0">
                <sl-icon-button name="file-text" label="Edit" style="font-size: 2.5rem;"></sl-icon-button>
                <p class="flex justify-center items-center font-mukta font-bold">Exame <sl-icon name="arrow-right-short"></sl-icon></p>
            </div>
        </div>
 <main>
    <style>
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
            font-family: "Mukta", "Roboto", Arial, Helvetica, sans-serif;
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
