{% extends "partials/body.twig.php" %}

{% block menu %}
<div id="layout-menu" tabindex="0" class="fixed z-[999rem] top-0 left-[-210px] w-[260px] h-screen flex justify-start items-stretch flex-col transitiom-all duration-300 bg-lightpurple text-darkerPurple overflow-y-auto drop-shadow-lg">
    <div class="sticky top-0 left-0 bg-lightpurple flex items-center justify-between w-full py-[0.8rem] px-[0.7rem]">
        <h2>Menu</h2>

        <button onclick="toggleMenu()">
        <i class="ph-list"></i>
        </button>
    </div>

    <div>
        <a href="Módulos">
        <i class="ph-book-open"></i>
        </a>
    </div>

    <div>
        <a href="Atividades">
        <i class="ph-file-search"></i>
        </a>
    </div>

    <div>
        <a href="Turma">
        <i class="ph-users"></i>
        </a>
    </div>

    <div>
        <a href="Configurações">
        <i class="ph-gear-six"></i>
        </a>
    </div>

    <div>
        <a href="Ajuda">
        <i class="ph-question"></i>
        </a>
    </div>
</div>
{% endblock %}


{% block body %}
    <main class="w-[calc(100vw - 50px)] h-screen ml-[50px] overflow-x-hidden p-4">
        {% block main %}

        {% endblock %}
    </main>
{% endblock %}
