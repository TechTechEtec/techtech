{% extends "partials/body.twig.php" %}

{% block title %} Student | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

    <div class="flex flex-col items-center justify-center mr-2">
        
        <button class="bg-purple h-32 w-32 rounded-lg mb-16">
            <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
            <span class="pl-2"></span>
        </button>

        <h1 class="text-orange font-bold mb-4">
            Escolha seu Avatar!
        </h1>

        <button class="bg-pink rounded-md px-14 h-10 text-white flex items-center group mt-4">
            <span class="pl-2">Aluno</span>
        </button>

    </div>

    <div class="flex space-y-2 flex-col rounded-lg items-center justify-center bg-white px-32 py-8 shadow-lg">

        <!-- Nome -->
        <div class="mt-2 font-bold flex flex-col">
            <label for="nome">Nome</label>
            <input
            id="nome"
            type="text"
            >
        </div>

        <!-- E-mail -->
        <div class="mt-2 font-bold flex flex-col">
            <label for="email">E-mail</label>
            <input
            id="email"
            type="text"
            >
        </div>

        <!-- Nascimento -->
        <div class="mt-2 font-bold flex flex-col w-full">
            <label for="data de nascimento">Data de Nascimento</label>
            <input
            id="data de nascimento"
            type="date"
            >
        </div>

        <!-- Instituição -->

        <div class="mt-2 font-bold flex flex-col">
            <label class="" for="instituição">Instituição</label>
            <input
            id="instituição"
            type="text"
            >
        </div>

        <!-- Senha -->

        <div class="mt-2 font-bold flex flex-col">
            <label for="senha">Senha</label>
            <input
            id="senha"
            type="text"
            >

        </div>
        
            <!-- botão -->
            <button class="bg-orange rounded-md px-12 h-10 text-white flex items-center group mt-4">
                <i class="ph-user"></i>
                <span class="pl-2">Cadastro</span>
            </button>
    </div>
    
</div>
{% endblock %}