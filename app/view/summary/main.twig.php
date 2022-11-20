{% extends "partials/layout.twig.php" %}

{% block title %} Sumário | Techtech {% endblock %}


{% block main %}

<main class="w-screen h-auto bg-[url({{BASE}}svgs/background.svg)] bg-repeat-y bg-center relative overflow-x-hidden">
    <div class="flex flex-row items-center"> 
    <h1 class="text-2xl font-bold font-clean text-purple uppercase px-4 my-8">Módulos</h1>
    <span data-tilt><img class="w-[90px] h-[90px]" src="{{BASE}}imgs/hexagonos.png" alt="Hexagonos"></span>
    </div>

     <div>
        
     </div>
</main>

<script src="tilt.jquery.js"></script>
{% endblock %}

