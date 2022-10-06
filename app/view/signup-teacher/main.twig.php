{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Professor | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

        <div class="flex space-y-2 grid-cols rounded-md items-center justify-center bg-white px-6  py-12 shadow-lg">

            <form class="flex flex-col items-center justify-center mr-32" method="post" action="{{BASE}}@signup-teacher">
                
                <button class="bg-darkpurple hover:bg-purple cursor-default h-20 w-20 rounded-full mb-2">
                    <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                    <span class="pl-2"></span>
                </button>

                <h1 class="text-orange font-bold">
                    Pefil
                </h1>

                <p class="px-12 h-10 text-darkpurple font-bold flex items-center group mt-8">
                    <span class="pl-2">Professor</span>
                </p>

            </div>

            <div class="flex flex-col items-center">

            <div class="mt-2 font-bold flex flex-col">
                    <label for="name">Nome da Instituição</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="name"
                    type="text"
                    name="schoolName"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label for="name">Nome</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="name"
                    type="text"
                    name="name"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label for="email">E-mail</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="email"
                    type="text"
                    name="email"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label for="senha">Senha</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="password"
                    type="password"
                    name="password"
                    >
                </div>

                <button class="bg-orange rounded-md w-36 h-9 text-white flex items-center group mt-8" type="submit">
                    <span class="pl-2 ml-8">Cadastrar</span>
                </button>
            </form>

        </div>
        
    </div>
{% endblock %}