{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-start md:items-center justify-center p-4">

        <button title="Início" onclick="window.history.go(-1); return false;" class="text-4xl text-purple absolute top-[10px] left-[10px]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </button>

         <!-- Toogle Dark/Light Button -->
        <div class="fixed bottom-[10px] right-[10px] z-10">
            {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
        </div>

        <main class="flex flex-wrap space-y-2 gap-[1rem] rounded-md items-start justify-center bg-white px-8 py-8 shadow-lg w-full max-w-[900px] min-h-[350px]" data-aos="fade-up" data-aos-mirror="true"
        data-aos-once="true" data-aos-duration="800">

            <form class="flex flex-col flex-1 items-center justify-between w-full min-h-[350px]" method="post" action="{{BASE}}@signup-class">
                
                <div class="mt-[1rem] font-bold flex gap-[0.5rem] flex-col w-full">
                    <label for="name">Nome da Turma</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="name"
                    type="text"
                    name="name"
                    required
                    >
                </div>

                <div class="{{ session.perfil == 'teacher' ? 'hidden' : 'flex' }} mt-[0.5rem] font-bold flex flex-col gap-[0.5rem] w-full">
                    <label for="teacherclass">Professor da Turma</label>
                    <select name="teachers" id="teachers" class="bg-grey rounded-md h-10 w-full" required value="{{ session.perfil == 'teacher' ?: session.email}}">
                        <!-- List of Teachers -->
                    </select>
                </div>

                <a href="{{BASE}}signup-teacher-byschool" title="Adicionar Professor" class=" flex flex-row flex-wrap items-center justify-start gap-[1rem] w-full max-[9.375rem] text-[#c4c4c4] font-bold transition-all ease duration-200 hover:-translate-y-[0.0625rem] my-[1rem] {{session.perfil == 'teacher' ? 'hidden' : 'flex'}}">
                    <i class="ph-plus text-xl"></i>
                    <span>Novo Professor</span>
                </a>


                <div class="mt-[0.5rem] font-bold flex flex-col gap-[0.5rem] w-full">
                    <label for="code">Código da Turma</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="code"
                    type="text"
                    name="code"
                    required
                    >
                </div>

                <div class="mt-[0.5rem] font-bold flex flex-col gap-[0.5rem] w-full">
                    <label for="confirmcode">Confirmar código da turma</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="confirmcode"
                    type="text"
                    name="confirmcode"
                    >
                </div>
        
        
                <button class="bg-orange rounded-md h-10 w-48 text-white flex items-center justify-center group mt-4" type="submit">
                    <span class="pl-2">Criar Turma</span>
                </button>

            </form>

            <!-- DIVIDER -->
            <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
            </div>

            <div class="flex w-full h-full min-h-[350px] max-w-[400px]  items-center justify-stretch gap-2 flex-1 flex-col">

                <div id="classes" class="max-h-[320px] overflow-y-auto w-full h-full min-h-[350px] flex-1 flex flex-col items-center justify-center gap-8">
                    <img class="w-full h-full max-w-[100px] max-h-[100px]" src="{{BASE}}svgs/spinner.svg" alt="loading spinner"/>
                </div>

            </div>

        </main>  
        
    </div>
{% endblock %}