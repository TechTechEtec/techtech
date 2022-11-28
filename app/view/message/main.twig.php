{% extends "partials/body.twig.php" %}

{% block title %} 404 | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen flex flex-row items-center justify-center p-[1rem] bg-[#f0f2f5] dark:bg-eerie">
        <main class="w-[85%] md:w-[31.25rem] h-min rounded-md bg-[#f9f9ff] dark:bg-light-eerie drop-shadow-xl p-[2rem] border-[0.5rem] border-double border-purple text-eerie dark:text-grey">
            <h1 class="text-6xl font-bold w-full text-center">{{title}}</h1>
            <p class="text-md font-medium w-full text-center mt-[2rem]">{{message}}</p>
        </main>
    </div>
{% endblock %}