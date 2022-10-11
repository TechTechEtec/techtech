{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Aluno | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

        <main class="flex flex-wrap space-y-2 gap-4 rounded-md items-start justify-center bg-white px-8 py-8 shadow-lg w-full max-w-[600px] min-h-[350px]">

            <div class="flex w-full h-full min-h-[350px] items-center justify-around flex-1 flex-col">
                <div class="p-8 bg-grey rounded-md drop-shadow-sm h-min cursor-pointer">
                    <img class="w-full h-full max-w-[130px] max-h-[130px]" src="{{BASE}}/svgs/anonymous_user.svg" alt="User without avatar"/>
                </div>

                <h2 class="font-nerko text-2xl text-orange font-semibold">Escolha seu avatar!</h2>

                <p class="bg-pink-500 text-white px-4 py-2 cursor-default rounded-md drop-shadow-sm min-w-[130px] text-center">Aluno</p>

            </div>

            <!-- DIVIDER -->
            <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
            </div>

            <form class="h-full w-full flex-1 flex flex-col items-center px-6" method="post" action="{{BASE}}@signup-student">

                <div class="font-bold flex flex-col w-full">
                    <label for="name">Nome</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="name"
                    type="text"
                    name="name"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="email">E-mail</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="email"
                    type="email"
                    name="email"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="birthday">Data de Nascimento</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="birthday"
                    type="date"
                    name="birthday"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="password">Senha</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="password"
                    type="password"
                    name="password"
                    required
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col w-full">
                    <label for="confirmpassword">Confirmar Senha</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="confirmpassword"
                    type="password"
                    name="confirmpassword"
                    required
                    >
                </div>

                <button class="bg-orange rounded-md px-12 h-10 text-white flex items-center group mt-8" type="submit">
                    <span class="pl-2">Cadastrar</span>
                </button>
            </form>
        </main>
        
    </div>
{% endblock %}