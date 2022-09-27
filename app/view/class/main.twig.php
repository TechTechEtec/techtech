{% extends "partials/body.twig.php" %}

{% block title %} Login Turma | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">


    <div class="flex space-y-2 grid-cols rounded-lg items-center justify-center bg-white px-24 py-8 shadow-lg">

        <div class="flex flex-col items-center justify-center mr-32">
            
            <button class="bg-purple h-24 w-24 rounded-full mb-8">
                <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                <span class="pl-2"></span>
            </button>

            <h1 class="text-orange font-bold mb-2">
                Escolha seu Avatar!
            </h1>

            <button class="bg-pink text-white rounded-md px-14 h-10 flex items-center group mt-2">
                <span class="pl-2">Turma</span>
            </button>

        </div>

<div class="flex flex-col items-center">

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

        <!-- Senha -->

        <div class="mt-2 font-bold flex flex-col">
            <label for="senha">Senha</label>
            <input
            id="senha"
            type="text"
            >

        </div>

        <div class="mt-2 font-bold flex flex-col">
            <label for="senha da turma">Senha da Turma</label>
            <input 
            id="senha da turma"
            type="text"
            >
        </div>
        
            <!-- botão -->
            <button class="bg-orange rounded-md px-12 h-10 text-white flex items-center group mt-4">
                <span class="pl-2">Cadastro</span>
            </button>
    </div>

</div>
        
    
</div>
{% endblock %}