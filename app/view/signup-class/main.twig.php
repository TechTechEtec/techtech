{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-center justify-center">


    <div class="flex space-y-2 grid-cols rounded-md items-center justify-center bg-white px-12 py-8 shadow-lg">

        <form class="flex flex-col items-center justify-center mr-32" method="post" action="{{BASE}}@signup-class">
 
            <div class="mt-2 font-bold flex flex-col">
                <label for="name">Nome da Turma</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="name"
                type="text"
                name="name"
                >
            </div>


            <div class="mt-2 font-bold flex flex-col">
                <label for="teacher">Professor da Turma</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="teacher"
                type="text"
                name="teacher"
                >
            </div>

            <div class="mt-2 font-bold flex flex-col">
                <label for="password">Senha da Turma</label>
                <input class="bg-grey rounded-md h-8 w-full"
                id="password"
                type="text"
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