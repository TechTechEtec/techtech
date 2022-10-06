{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Aluno | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

        <div class="flex space-y-2 grid-cols rounded-md items-center justify-center bg-white px-8 py-4 shadow-lg">

        <form class="flex flex-col items-center" method="post" action="{{BASE}}@signup-student">

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

            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="birthday">Data de Nascimento</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="birthday"
                type="date"
                name="birthday"
                >
            </div>

            <div class="mt-2 font-bold flex flex-col">
                <label for="password">Senha</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="password"
                type="password"
                name="password"
                >
            </div>

            <button class="bg-orange rounded-md px-12 h-10 text-white flex items-center group mt-8" type="submit">
                <span class="pl-2">Cadastrar</span>
            </button>
         </form>

</div>
        
    </div>
{% endblock %}