{% extends "partials/body.twig.php" %}

{% block menu %}

    <!-- MENU -->

    <div id="layout-menu" tabindex="0" onblur="closeMenu()" class="fixed z-[100] top-0 left-[-230px] w-[280px] h-screen flex justify-start items-stretch flex-col transitiom-all ease-out gap-[0.5rem] duration-300 bg-lightpurple text-darkerPurple overflow-y-auto drop-shadow-lg pr-[4px] pt-4 pb-4">
        <div class="sticky top-0 left-0 bg-lightpurple flex items-center justify-between w-full pl-2 pr-[4px]">
            <h2 class="text-4xl font-bold text-darkerPurple font-mukita mb-4">Menu</h2>

            <button onclick="toggleMenu()" class="text-4xl font-bold ease-linear transition-all duration-300" id="openMenuButton">
                <i class="ph-list"></i>
            </button>
        </div>


        <a href="#" title="Módulos" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg">
            <p class="text-2xl font-bold text-darkerPurple font-mukita">Módulos</p>

            <span class="text-4xl font-bold text-center flex items-center justify-center">
                <i class="ph-book-open"></i>
            </span>
        </a>

        <a href="#" title="Atividades" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg">
            <p class="text-2xl font-bold text-darkerPurple font-mukita">Atividades</p>

            <span class="text-4xl font-bold text-center flex items-center justify-center">
                <i class="ph-file-search"></i>
            </span>
        </a>

        <a href="#" title="Turma" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg">
            <p class="text-2xl font-bold text-darkerPurple font-mukita">Turma</p>

            <span class="text-4xl font-bold text-center flex items-center justify-center">
                <i class="ph-users"></i>
            </span>
        </a>

        <a href="#" title="Configurações" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg">
            <p class="text-2xl font-bold text-darkerPurple font-mukita">Configurações</p>

            <span class="text-4xl font-bold text-center flex items-center justify-center">
                <i class="ph-gear-six"></i>
            </span>
        </a>

        <a href="#" title="Ajuda" class="flex flex-row items-center justify-between w-full pl-2 py-[6px]  pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg">
            <p class="text-2xl font-bold text-darkerPurple font-mukita">Ajuda</p>

            <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-question"></i>
            </span>
        </a>

    </div>

{% endblock %}

{% block body %}
    <main class="w-[calc(100vw - 50px)] h-screen ml-[50px] overflow-x-hidden pl-0 flex flex-row items-start justify-stretch">

        <!-- USER INFORMATIONS -->
        <div class="bg-[#fff] text-black min-h-screen sticky top-0 z-1 overflow-y-auto overflow-x-hidden border-r-2 border-[#808080] p-4 m-r-4 min-w-[260px] max-w-[260px]">

            <div id="user_information_session" class="w-full text-center flex flex-col gap-[1rem] items-center justify-start">

                <sl-avatar
                    image="{{session.avatar}}"
                    shape="rounded"
                    label="{{ session.name }}"
                    style="--size:6rem"
                ></sl-avatar>

                <p class="w-full font-bold text-lg font-mukta text-center">{{ session.name }}</p>
            </div>

            <p class="my-6 w-full text-left text-xl leading-[1.5rem] text-[#808080] font-medium  font-mukta">Desumilde jamais. Não é orgulho, é postura!</p>

            <ul class="w-full list-none flex flex-col justify-start items-stretch">
                <li class="flex flex-row items-center justify-between">
                    <span class="font-bold text-lg uppercase font-mukta">Nota:</span>
                    <span class="text-xl font-roboto ">0,0</span>
                </li>
                <li class="flex flex-row items-center justify-between">
                    <span  class="font-bold text-lg uppercase font-mukta">Módulo:</span>
                    <span class="text-xl font-roboto ">1</span>
                </li> 
                <li class="flex flex-row items-center justify-between">
                    <span  class="font-bold text-lg  uppercase font-mukta">Progresso:</span>
                    <span class="text-xl font-roboto ">73%</span>
                </li>
            </ul>

            <div class="w-full mt-4 mx-2 text-center text-purple font-bold">
                <sl-progress-ring value="73" class="progress-ring-values" style="margin-bottom: .5rem; 
                --track-color: pink; 
                --indicator-color: hsl(252, 100%, 68%);">
                73%</sl-progress-ring>
            </div>

        </div>

        <!-- MAIN CONTENT -->
        <div class="flex-1 w-full p-4" >
        {% block main %}

        {% endblock %}   
        </div>
        
    </main>
{% endblock %}
