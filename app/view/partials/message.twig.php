{% extends "partials/body.twig.php" %}

{% block title %} Message | Techtech {% endblock %}

{% block body %}


<div class="w-screen h-screen flex flex-col items-center justify-center bg-[rgba(0,0,0,0.5)] p-[1rem] fixed z-50">
    <main class="w-[85%] md:w-[31.25rem] h-min rounded-md  bg-[#f9f9ff] dark:bg-lighteerie text-eerie dark:text-grey drop-shadow-xl p-[2rem] border-[0.5rem] border-double border-purple flex flex-col items-start justify-center gap-[2rem]">
            <h1 class="text-4xl font-bold w-full text-center">{{title}}</h1>
            <p class="text-md font-medium w-full text-center break-words">{{message}}</p>
            {% if link != null %}
            <a href="{{link}}" class="p-[1rem] rounded-lg drop-shadow-lg bg-purple text-white font-bold w-[9.375rem] text-center mx-auto hover:translate-y-[-0.1875rem] eas-linear duration-300">OK</a>
            {% else%}
            <button onclick="window.history.go(-1); return false;" class="p-[1rem] rounded-lg drop-shadow-lg bg-purple text-white font-bold w-[9.375rem] text-center mx-auto hover:translate-y-[-0.1875rem] eas-linear duration-300 cursor-pointer">voltar</button>
            {% endif %}
    </main>
</div>

{% endblock %}

