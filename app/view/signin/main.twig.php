{% extends "partials/body.twig.php" %}

{% block title %} Entrar | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">


    <div class="text-2xl flex flex-col space-y-2 grid-cols absolute inset-x-0 bottom-0 md:static lg:static md:inset-0 lg:inset-0 rounded-md items-center bg-white h-[40rem] md:h-[30rem] lg:h-[30rem]  px-8 py-12 shadow-lg">

     <div class="mt-[-15rem] md:mt-0 lg:mt-0 items-center justify-center fixed md:static lg:static">
            <button class="bg-darkpurple hover:bg-purple cursor-default h-20 w-20 rounded-full mb-8">
                <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                <span class="pl-2"></span>
            </button>

     </div>

        <div class="flex flex-col items-center">
            <div class="mt-2 font-bold flex flex-col">
                <label for="email">E-mail</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="email"
                type="text"
                >
            </div>

            <div class="mt-2 font-bold flex flex-col">
                <label for="senha">Senha</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="senha"
                type="text"
                >

            </div>

            <button class="bg-darkpurple hover:bg-purple rounded-md px-12 h-10 text-white flex items-center group mt-16">
                <span class="pl-2">Entrar</span>
            </button>
        </div>

    </div>
        
</div>
{% endblock %}