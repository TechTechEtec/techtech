{% extends "partials/body.twig.php" %}

{% block title %} Escolha seu Cadastro | Techtech {% endblock %}

{% block body %}

<div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

    <div class="flex flex-col gap-8 w-full max-w-[800px]">
        <h1 class="text-purple text-5xl font-normal font-bold text-center w-full">Como você quer se cadastrar?</h1>


        <div class="flex flex-col gap-6 items-stretch min-h-[400px] justify-center md:flex-row w-full">

            <div class="flex-1 w-full flex flex-col items-stretch justify-center p-4 rounded-lg bg-white ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
                <div class="flex flex-col items-stretch justify-start gap-4">
                    <img class="w-[180px] h-[180px] mx-auto" src="{{BASE}}imgs/student.png" alt="student icon image"/>
                    <a href="{{BASE}}signup-student" class="w-full max-w-[300px] mx-auto p-4 bg-pink  text-center text-white rounded-md pointer-events-auto hover:transform-y-[-3px]">Estudante</a>
                </div>
            </div>

            <div class="flex-1 w-full flex flex-col items-stretch justify-center  p-4 rounded-lg bg-white ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
                <div class="flex flex-col items-stretch justify-start gap-4">
                    <img class="w-[180px] h-[180px] mx-auto" src="{{BASE}}imgs/school.png" alt="student icon image"/>
                    <a href="{{BASE}}signup-school" class="w-full max-w-[300px] mx-auto p-4 bg-pink text-center text-white rounded-md pointer-events-auto hover:transform-y-[-3px]">Escola</a>
                </div>
            </div>

        </div>

    </div>

</div>

{% endblock %}