{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block main %}

<h1 class="text-4xl font-bold font-clean text-purple uppercase mx-4 my-8">Dashboard Page</h1>

<p class="m-4 text-2xl font-bold font-mukta text-orange uppercase my-6">Informações do usuário Logado: </p>

<ul class="text-lg font-medium font-clean m-4">
    <li>
        <span class="text-darkpurple font-extrabold">Name:</span>
        {{ session.name }} 
    </li> 

    <li>
        <span class="text-darkpurple font-extrabold">E-mail:</span>
        {{ session.email }} 
    </li>
    <li>
        <span class="text-darkpurple font-extrabold">Perfil:</span>
        {{ session.perfil }} 
    </li>
</ul>



{% endblock %}