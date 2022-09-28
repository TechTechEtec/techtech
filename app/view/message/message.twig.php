{% extends 'partials/body.twig.php'  %}

{% block title %}{{titulo}} | TechTech{% endblock %}

{% block body %}
<div class="w-full flex items-center justify-center bg-white p-4 mt-5">
    
    <h1>{{titulo}}</h1>
    <hr>
    <p>{{descricao}}</p>
    {% if link != null %}
    <a href="{{link}}" class="p-4 rounded-lg drop-shadow-lg bg-purple text-white">Voltar</a>
    {% endif %}
</div>
{% endblock %}