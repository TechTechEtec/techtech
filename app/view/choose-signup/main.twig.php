{% extends "partials/body.twig.php" %}

{% block title %} Escolha seu Cadastro | Techtech {% endblock %}

{% block body %}
    <div class="w-full min-h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple dark:bg-lighteerie relative overflow-x-hidden flex flex-row items-center justify-center py-12 px-4">

        <button title="Voltar" onclick="window.history.go(-1); return false;" class="text-4xl text-purple absolute z-10 top-[10px] left-[10px]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </button>

        <!-- Toogle Dark/Light Button -->
        <div class="fixed bottom-[10px] right-[10px] z-10">
            {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
        </div>

        <div class="flex flex-col gap-16 w-full max-w-[68.75rem]">
            <h1 class="text-purple text-5xl font-extrabold text-center w-full mt-[3rem]">Como você quer se cadastrar?</h1>

            <div class="flex flex-col gap-6 items-stretch min-h-[400px] justify-center md:flex-row w-full">

                <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex-1 w-full flex flex-col items-stretch justify-center p-4 rounded-lg bg-white dark:bg-eerie dark:text-grey ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
                    <div class="flex flex-col items-stretch justify-start gap-4">
                        <img class="w-[180px] h-[180px] mx-auto" src="{{BASE}}imgs/student.png" alt="student icon image"/>
                        <a href="{{BASE}}signup-student" class="w-full max-w-[300px] mx-auto py-2 px-4 bg-pink-500 text-center text-white rounded-md pointer-events-auto hover:-translate-y-1 transition-all ease duration-200">Estudante</a>
                    </div>
                </div>

                <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex-1 w-full flex flex-col items-stretch justify-center p-4 rounded-lg bg-white dark:bg-eerie dark:text-grey ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
                    <div class="flex flex-col items-stretch justify-start gap-4">
                        <img class="w-[180px] h-[180px] mx-auto" src="{{BASE}}imgs/school.png" alt="student icon image"/>
                        <a href="{{BASE}}signup-school" class="w-full max-w-[300px] mx-auto py-2 px-4 bg-pink-500 text-center text-white rounded-md pointer-events-auto hover:-translate-y-1 transition-all ease duration-200">Escola</a>
                    </div>
                </div>

                <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex-1 w-full flex flex-col items-stretch justify-center  p-4 rounded-lg bg-white dark:bg-eerie dark:text-grey ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
                    <div class="flex flex-col items-stretch justify-start gap-4">
                        <img class="w-[180px] h-[180px] mx-auto" src="{{BASE}}imgs/teacher.png" alt="student icon image"/>
                        <a href="{{BASE}}signup-teacher" class="w-full max-w-[300px] mx-auto py-2 px-4 bg-pink-500 text-center text-white rounded-md pointer-events-auto hover:-translate-y-1 transition-all ease duration-200">Professor</a>
                    </div>
                </div>
            </div>

            <p class="text-eerie dark:text-grey w-full text-center">Já tem uma conta? <a href="{{BASE}}signin" class="text-blue">Entre</a></p>
        </div>
    </div>
{% endblock %}