{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Aluno | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">


    <div class="flex space-y-2 grid-cols rounded-md items-center justify-center bg-white px-12 py-8 shadow-lg">

        <div class="flex flex-col items-center justify-center mr-32">
            
            <button class="bg-grey h-28 w-28 rounded-lg mb-8">
                <i class="ph-user text-5xl text-black mt-1 ml-2"></i>
                <span class="pl-2"></span>
            </button>

            <h1 class="text-orange font-bold mb-6">
                Escolha seu Avatar!
            </h1>

            <button class="bg-purple rounded-md h-10 w-36 text-white flex items-center justify-center group mt-2">
                <span class="pl-2">Aluno</span>
            </button>

        </div>

<div class="flex flex-col items-center">

        <!-- Nome -->
        <div class="mt-2 font-bold flex flex-col">
            <label for="nome">Nome</label>
            <input class="rounded-md h-8 w-full"
            id="nome"
            type="text"
            >
        </div>

        <!-- E-mail -->
        <div class="mt-2 font-bold flex flex-col">
            <label for="email">E-mail</label>
            <input class="rounded-md h-8 w-full"
            id="email"
            type="text"
            >
        </div>

        <!-- Nascimento -->
        <div class="mt-2 font-bold flex flex-col w-full">
            <label for="data de nascimento">Data de Nascimento</label>
            <input class="rounded-md h-8 w-full"
            id="data de nascimento"
            type="date"
            >
        </div>

        <!-- Senha -->

        <div class="mt-2 font-bold flex flex-col">
            <label for="senha">Senha</label>
            <input class="rounded-md h-8 w-full"
            id="senha"
            type="text"
            >

        </div>
        
            <!-- botão -->
            <button class="bg-orange rounded-md px-12 h-10 text-white flex items-center group mt-8">
                <span class="pl-2">Cadastro</span>
            </button>
    </div>

</div>
        
    
</div>
{% endblock %}