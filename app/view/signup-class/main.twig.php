{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}
    <div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple dark:bg-eerie relative overflow-x-hidden flex flex-row items-start md:items-center justify-center p-4">

        <button title="Início" onclick="window.location.href = '{{BASE}}'; return false;" class="text-4xl text-purple absolute top-[10px] left-[10px]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </button>

         <!-- Toogle Dark/Light Button -->
        <div class="fixed bottom-[10px] right-[10px] z-10">
            {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
        </div>

        <main class="flex flex-wrap space-y-2 gap-[1rem] rounded-md items-start justify-center bg-white dark:bg-lighteerie px-8 py-8 shadow-lg w-full max-w-[900px] min-h-[350px]" data-aos="fade-up" data-aos-mirror="true"
        data-aos-once="true" data-aos-duration="800">

            <form class="flex flex-col flex-1 items-center justify-between w-full min-h-[350px]" method="post" action="{{BASE}}@signup-class">
                
                <div class="mt-[1rem] font-bold flex gap-[0.5rem] flex-col w-full">
                    <label class="text-eerie dark:text-grey" for="name">Nome da Turma</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="name"
                    type="text"
                    name="name"
                    required
                    >
                </div>

                <div class="{{ session.perfil == 'teacher' ? 'hidden' : 'flex' }} mt-[0.5rem] font-bold flex flex-col gap-[0.5rem] w-full">
                    <label class="text-eerie dark:text-grey" for="teacherclass">Professor da Turma</label>
                    <select name="teachers" id="teachers" class="bg-grey rounded-md h-10 w-full" required>
                        {% if session.perfil == 'school' %}
                            {% for teacher in session.teacher %}
                                <option value="{{teacher.email}}">{{teacher.email}}</option>
                            {% endfor %}
                        {% elseif session.perfil == 'teacher' %}
                            <option value="{{session.email}}" selected>{{session.email}}</option>
                        {% else %}
                            {% for teacher in session.teacher %}
                                <option value="{{teacher.email}}">{{teacher.email}}</option>
                            {% endfor %}
                        {% endif %}
                    </select>
                </div>

                <a href="{{BASE}}signup-teacher-byschool" title="Adicionar Professor" class=" flex flex-row flex-wrap items-center justify-start gap-[1rem] w-full max-[9.375rem] text-[#c4c4c4] font-bold transition-all ease duration-200 hover:-translate-y-[0.0625rem] my-[1rem] {{session.perfil == 'teacher' ? 'hidden' : 'flex'}} text-eerie dark:text-grey">
                    <i class="ph-plus text-xl"></i>
                    <span>Novo Professor</span>
                </a>

                <div class="mt-[0.5rem] font-bold flex flex-col gap-[0.5rem] w-full">
                    <label class="text-eerie dark:text-grey" for="code">Código da Turma</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="code"
                    type="text"
                    name="code"
                    required
                    >
                </div>

                <div class="mt-[0.5rem] font-bold flex flex-col gap-[0.5rem] w-full">
                    <label class="text-eerie dark:text-grey" for="confirmcode">Confirmar código da turma</label>
                    <input class="bg-grey rounded-md h-10 w-full"
                    id="confirmcode"
                    type="text"
                    name="confirmcode"
                    >
                </div>
    
        
                <button class="bg-pink-500 rounded-md h-10 w-48 text-white flex items-center justify-center group mt-4" type="submit">
                    <span class="pl-2">Criar Turma</span>
                </button>

                <p class="text-eerie dark:text-grey">voltar para ? <a href="{{BASE}}" title="Signin" class="text-blue">dashboard</a> </p>

            </form>

            <!-- DIVIDER -->
            <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
            </div>

            <div class="flex w-full h-full min-h-[350px] max-w-[400px]  items-center justify-stretch gap-2 flex-1 flex-col">

                <div id="classes" class="max-h-[320px] overflow-y-auto w-full h-full min-h-[350px] flex-1 flex flex-col items-center justify-center gap-8">
                    <ul class="students w-full h-auto min-h-[320px] p-2 list-none flex flex-col items-stretch justify-start gap-[1rem] cursor-default">
                        {% if session.classroom|length > 0 %}
                            {% for class in session.classroom %}
                                <li data-tilt  data-tilt-speed="1000" data-tilt-perspective="2000" data-tilt-scale="1.025" class="p-[0.5rem] rounded-lg border-2 border-solid border-purple bg-[#f0f2f5] dark:bg-eerie ease-in duration-200" id={{class.id}}>
                                    <span class="text-2xl font-bold font-cartoon text-purple w-full break-words">{{class.name}}</span>
                                
                                    <div class="flex flex-row items-center justify-between p-2 gap-4 flex-wrap text-eerie dark:text-grey font-medium font-clean">
                                        <span>{{class.code}}</span>
                                        <span>{{class.teacher_email}}</span>
                                    </div>
                                </li>
                            {% endfor %}
                        {% else %}
                            <div class="w-full text-center flex flex-col items-center justify-center h-full gap-[1rem]">
                                <p class="text-purple font-roboto font-extrabold w-full text-center text-xl uppercase"> Não há nenhuma classe cadastrada!</p>
                                <img src="{{BASE}}svgs/techbo_error.svg" alt="techbo error image" class="w-full h-full max-w-[120px] max-h-[120px]"/>
                            </div>
                        {% endif %}
                    </ul>
                </div>

            </div>

        </main>  
        
    </div>
{% endblock %}