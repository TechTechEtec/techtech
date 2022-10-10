{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Escola | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-center justify-center">

        <div class="text-lg flex flex-col md:flex-row lg:flex-row space-y-2 grid-cols absolute inset-x-0 bottom-0 md:static lg:static md:inset-0 lg:inset-0 rounded-md items-center bg-white h-[40rem] md:h-[20rem] lg:h-[20rem]  px-8 py-12 shadow-lg">

            <div class="flex flex-col items-center justify-center mr-0 md:mr-32 lg:mr-32">

              <div class="mt-[-20rem] md:mt-0 lg:mt-0 items-center justify-center fixed md:static lg:static">
                <button class="bg-darkpurple hover:bg-purple cursor-default h-20 w-20 rounded-full mb-2 ml-0 md:ml-10 lg:ml-10">
                    <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                    <span class="pl-2"></span>
                </button>

                <h1 class="text-orange font-bold ml-4 md:ml-14 lg:ml-14">
                    Perfil
                </h1>

                <p class="px-0 md:px-12 lg:px-12 h-10 text-lightpurple md:text-darkpurple lg:text-darkpurple font-bold flex items-center group mt-2">
                    <span class="pl-2">Escola</span>
                </p>
              </div>
                
            </div>

            <div class="flex flex-col items-center">

                <div class="mt-2 font-bold flex flex-col">
                    <label for="nome">Nome da Instituição</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="nome"
                    type="text"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label for="email">E-mail Institucional</label>
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
            
                <button class="bg-orange rounded-md w-44 h-9 text-white flex items-center justify-center group mt-8">
                    <span class="pl-2">Cadastrar</span>
                </button>
            </div>

        </div> 

    </div>
{% endblock %}