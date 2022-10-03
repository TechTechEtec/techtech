{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Aluno | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

        <div class="flex space-y-2 grid-cols rounded-md items-center justify-center bg-white px-8 py-4 shadow-lg">

            <div class="flex flex-col items-center justify-center mr-32">
                
                <button class="bg-darkpurple hover:bg-purple h-20 w-20 rounded-full mb-2">
                    <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                    <span class="pl-2"></span>
                </button>

                <h1 class="text-orange font-bold">
                    Perfil
                </h1>

                <p class="px-12 h-10 text-darkpurple font-bold flex items-center group mt-8">
                    <span class="pl-2">Aluno</span>
                </p>

            </div>

            <div class="flex flex-col items-center">

                <div class="mt-2 font-bold flex flex-col">
                    <label for="nome">Nome</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="nome"
                    type="text"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label for="email">E-mail</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="email"
                    type="text"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="data de nascimento">Data de Nascimento</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="data de nascimento"
                    type="date"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label for="senha">Senha</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="senha"
                    type="text"
                    >
                </div>

                <button class="bg-orange rounded-md w-36 h-9 text-white flex items-center group mt-8">
                    <span class="pl-2 ml-8">Cadastrar</span>
                </button>
            </div>

        </div>
        
    </div>
{% endblock %}