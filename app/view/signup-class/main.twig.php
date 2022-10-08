{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-center justify-center">

        <div class="text-2xl flex flex-col md:flex-row lg:flex-row space-y-2 grid-cols absolute inset-x-0 bottom-0 md:static lg:static md:inset-0 lg:inset-0 rounded-md items-center bg-white h-[40rem] md:h-[20rem] lg:h-[20rem]  px-8 py-12 shadow-lg">

         <div class="flex flex-col items-center justify-center mr-0 md:mr-32 lg:mr-32">
             <div class="mt-[-20rem] md:mt-0 lg:mt-0 items-center justify-center fixed md:static lg:static">
                <button class="bg-darkpurple hover:bg-purple cursor-default h-20 w-20 rounded-full mb-2 ml-0 sm md:ml-10 lg:ml-10">
                    <i class="ph-user text-5xl text-white mt-1 ml-2"></i>
                    <span class="pl-2"></span>
                </button>

                <h1 class="text-orange justify-center font-bold ml-4 md:ml-14 lg:ml-14">
                    Perfil
                </h1>

                <p class="px-0 md:px-12 lg:px-12 h-10 text-darkpurple font-bold flex items-center group mt-2">
                    <span class="pl-2">Turma</span>
                </p>
             </div>
         </div>


                <div class="mt-2 font-bold flex flex-col">
                    <label for="nome">Nome</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="nome"
                    type="text"
                    >
                </div>


                <div class="mt-8 font-bold flex flex-col">
                    <label for="senha">Senha da Turma</label>
                    <input class="bg-grey rounded-md h-8 w-full"
                    id="senha"
                    type="text"
                    >
                </div>

                <button class="bg-orange rounded-md w-36 h-9 text-white flex items-center justify-center group mt-8">
                    <span class="pl-2 ml-8">Cadastrar</span>
                </button>
            </div>

            <div class="mt-2 font-bold flex flex-col">
                <label for="password">Senha da Turma</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="password"
                type="password"
                name="password"
                >
            </div>
        
            <button class="bg-orange rounded-md h-10 w-48 text-white flex items-center justify-center group mt-4" type="submit">
                <span class="pl-2">Criar Turma</span>
            </button>

        </form>

        <div class="flex flex-col items-center mr-4">
            
            <ul>
                <li class="font-bold"><a href="#"></a> PW III TB - 3° DS</li>
                <p class="mb-2">Ivan Souza</p>
                <LI class="font-bold"><a href="#"></a>PW III TA - 3°DS</LI>
                <p class="mb-2">Ivan Souza</p>
                <LI class="font-bold"><a href="#"></a>História - 3°DS</LI>
                <p class="mb-2">Gilmar Campos</p>
            </ul>

        </div>
 
    </div>

</div>
        
    
</div>
{% endblock %}