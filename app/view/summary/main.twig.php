{% extends "partials/layout.twig.php" %}

{% block title %} Sumário | Techtech {% endblock %}


{% block main %}

<main class="w-screen h-auto bg-repeat-y bg-center relative overflow-x-hidden">
    <div class="flex flex-row items-center"> 
    <h1 class="text-2xl font-bold font-clean text-purple uppercase px-4 my-8">Módulos</h1>
    <span data-tilt><img class="w-[90px] h-[90px]" src="{{BASE}}imgs/hexagonos.png" alt="Hexagonos"></span>
    </div>

    <div class="mt-32 ml-32 flex justify-center items-center bg-{{BASE}}imgs/cabos.png">
        <div class="flex flex-row gap-8 relative">
            <img class="" src="{{BASE}}imgs/pentagono.png" alt="Pentágonos" data-aos="fade-up">
            <img class="" src="{{BASE}}imgs/pentagono.png" alt="Pentágonos" data-aos="fade-up">
            <img class="" src="{{BASE}}imgs/pentagono.png" alt="Pentágonos" data-aos="fade-up">
            <img class="" src="{{BASE}}imgs/pentagono.png" alt="Pentágonos" data-aos="fade-up">
        </div>
    
    </div>
</main>

<script src="tilt.jquery.js"></script>
{% endblock %}

