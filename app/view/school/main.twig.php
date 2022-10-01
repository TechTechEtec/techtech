{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Instituição | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-center justify-center">

    <div class="flex space-y-2 grid-cols rounded-md items-center justify-center bg-white px-12 py-12 shadow-lg">

        <div class="flex flex-col items-center justify-center mr-32">

            <button class="bg-darkpurple hover:bg-purple cursor-default h-20 w-20 rounded-full mb-6">
                <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                <span class="pl-2"></span>
            </button>

            <h1 class="text-orange font-bold mt-6">
                Perfil
            </h1>

            <button class="bg-darkpurple hover:bg-purple rounded-md px-12 h-10 text-white flex items-center group mt-8">
                <span class="pl-2">Escola</span>
            </button>
            
        </div>

        <div class="flex flex-col items-center">

            <!-- Nome -->
            <div class="mt-2 font-bold flex flex-col">
                <label for="nome">Nome da Instituição</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="nome"
                type="text"
                >
            </div>

            <!-- E-mail -->
            <div class="mt-2 font-bold flex flex-col">
                <label for="email">E-mail Institucional</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="email"
                type="text"
                >
            </div>

            <!-- Senha -->
            <div class="mt-2 font-bold flex flex-col">
                <label for="senha">Senha</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="senha"
                type="text"
                >

            </div>
            
                <!-- botão -->
                <button class="bg-orange rounded-md px-6 h-10 text-white flex items-center group mt-8">
                    <span class="pl-2">Cadastre suas Turmas</span>
                </button>
        </div>

</div>
        
    
</div>
{% endblock %}