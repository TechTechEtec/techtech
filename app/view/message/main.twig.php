{% extends "partials/body.twig.php" %}

{% block title %} 404 | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen flex flex-row items-center justify-center p-4 bg-[#f0f2f5]">
        <main class="w-[85%] md:w-[500px] h-min rounded-md bg-[#f9f9ff] drop-shadow-xl p-8 border-2 border-double border-purple">
            <h1 class="text-6xl font-bold w-full text-center">{{title}}</h1>
            <p class="text-md font-medium w-full text-center mt-8">{{message}}</p>
        </main>
    </div>
{% endblock %}