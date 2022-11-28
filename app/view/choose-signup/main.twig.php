{% extends "partials/body.twig.php" %}

{% block title %} Escolha seu Cadastro | Techtech {% endblock %}

{% block body %}
    <div class="w-full min-h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple dark:bg-lighteerie relative overflow-x-hidden flex flex-row items-center justify-center py-[3rem] px-[1rem]">

        <button title="Voltar" onclick="window.history.go(-1); return false;" class="text-4xl text-purple absolute z-10 top-[0.625rem] left-[0.625rem]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </button>

        <!-- Toogle Dark/Light Button -->
        <div class="fixed bottom-[0.625rem] right-[0.625rem] z-10">
            {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
        </div>

        <div class="flex flex-col gap-[4rem] w-full max-w-[68.75rem]">
            <h1 class="text-purple text-5xl font-extrabold text-center w-full mt-[3rem]">Como você quer se cadastrar?</h1>

            <div class="flex flex-col gap-[1.5rem] items-stretch min-h-[25rem] justify-center md:flex-row w-full">

                <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex-1 w-full flex flex-col items-stretch justify-center p-[1rem] rounded-lg bg-white dark:bg-eerie dark:text-grey ease-in duration-300 transition-all hover:transform-y-[-0.1875rem] drop-shadow-lg">
                    <div class="flex flex-col items-stretch justify-start gap-[1rem]">
                        <img class="w-[11.25rem] h-[11.25rem] mx-auto" src="{{BASE}}imgs/student.png" alt="student icon image"/>
                        <a href="{{BASE}}signup-student" class="w-full max-w-[18.75rem] mx-auto py-[0.5rem] px-[1rem] bg-pink-500 text-center text-white rounded-md pointer-events-auto hover:-translate-y-1 transition-all ease duration-200">Estudante</a>
                    </div>
                </div>

                <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex-1 w-full flex flex-col items-stretch justify-center p-[1rem] rounded-lg bg-white dark:bg-eerie dark:text-grey ease-in duration-300 transition-all hover:transform-y-[-0.1875rem] drop-shadow-lg">
                    <div class="flex flex-col items-stretch justify-start gap-[1rem]">
                        <img class="w-[11.25rem] h-[11.25rem] mx-auto" src="{{BASE}}imgs/school.png" alt="student icon image"/>
                        <a href="{{BASE}}signup-school" class="w-full max-w-[18.75rem] mx-auto py-[0.5rem] px-[1rem] bg-pink-500 text-center text-white rounded-md pointer-events-auto hover:-translate-y-1 transition-all ease duration-200">Escola</a>
                    </div>
                </div>

                <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="flex-1 w-full flex flex-col items-stretch justify-center p-[1rem] rounded-lg bg-white dark:bg-eerie dark:text-grey ease-in duration-300 transition-all hover:transform-y-[-0.1875rem] drop-shadow-lg">
                    <div class="flex flex-col items-stretch justify-start gap-[1rem]">
                        <img class="w-[11.25rem] h-[11.25rem] mx-auto" src="{{BASE}}imgs/teacher.png" alt="student icon image"/>
                        <a href="{{BASE}}signup-teacher" class="w-full max-w-[18.75rem] mx-auto py-[0.5rem] px-[1rem] bg-pink-500 text-center text-white rounded-md pointer-events-auto hover:-translate-y-1 transition-all ease duration-200">Professor</a>
                    </div>
                </div>
            </div>

            <p class="text-[#404040] dark:text-grey w-full text-center font-medium font-mukta text-xl">Já tem uma conta? <a href="{{BASE}}signin" class="text-blue">Entre</a></p>
        </div>
    </div>
{% endblock %}