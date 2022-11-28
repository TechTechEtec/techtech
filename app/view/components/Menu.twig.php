<div id="layout-menu" tabindex="0" onblur="closeMenu()" class="fixed z-[100] top-0 left-[-14.375rem] w-[17.5rem] h-screen flex justify-start items-stretch flex-col transitiom-all ease-out gap-[0.5rem] duration-200 bg-lightpurple border-r-[0.0625rem] shadow-sm dark:border-eerie dark:bg-lighteerie text-darkerPurple overflow-y-auto drop-shadow-lg pr-[0.25rem]">

    <!-- TOGGLE BUTTON -->
    <div class="sticky pt-[1rem] top-0 left-0 bg-lightpurple dark:bg-lighteerie transition-all ease-out duration-200 flex items-center justify-between w-full px-[0.5rem] md:pr-[0.25rem] text-darkerPurple dark:text-grey text-4xl font-bold dark:font-normal font-mukita mb-[0.5rem]">
        <h2>Menu</h2>

        <button onclick="toggleMenu()" class="ease-linear transition-all duration-300" id="openMenuButton">
            <i class="ph-list"></i>
        </button>
    </div>

    <!-- DASHBOARD -->
    <a href="{{BASE}}dashboard" title="Dashboard" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] hover:border-purple border-2 border-transparent rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-dashboard">
        <p class="text-2xl">Dashboard</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-house"></i>
        </span>
    </a>

        <!-- MODULES -->
    <a href="{{BASE}}modules" title="Módulos" class="flex flex-row items-center justify-between w-full pl-[0.5rem] py-[0.375rem] pr-[0.25rem] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-modules">
        <p class="text-2xl">Módulos</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-book-open"></i>
        </span>
    </a>

     <!-- CREATE CLASS -->
    {% if session.perfil == 'teacher' or session.perfil == 'school' %}
        <a href="{{BASE}}signup-class" title="Criar Turma" class="flex flex-row items-center justify-between w-full pl-[0.5rem] py-[0.375rem] pr-[0.25rem] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-activities">
            <p class="text-2xl">Criar Turma</p>

            <span class="text-4xl text-center flex items-center justify-center">
                <i class="ph-student"></i>
            </span>
        </a>
    {% endif %}

    {% if session.perfil == 'school' %}
        <a href="{{BASE}}signup-teacher-byschool" title="Criar Turma" class="flex flex-row items-center justify-between w-full pl-[0.5rem] py-[0.375rem] pr-[0.25rem] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-activities">
            <p class="text-2xl">Criar Professor</p>

            <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-chalkboard-teacher"></i>
            </span>
        </a>
    {% endif %}

    <!-- PLAYGROUND -->
    <a href="{{BASE}}playground" title="Turma" class="flex flex-row items-center justify-between w-full pl-[0.5rem] py-[0.375rem] pr-[0.25rem] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-playground">
        <p class="text-2xl">Playground</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-terminal-window"></i>
        </span>
    </a>

    <!-- LOGOUT BUTTON -->
    <a href="{{BASE}}@logout" title="logout" class="p-[1rem] sticky top-[110%] rounded-tr-lg z-[101] flex flex-row justify-between items-center gap-[0.5rem] transition-all ease-linear duration-200 hover:bg-darkpurple text-darkerPurple dark:text-grey hover:text-white text-lg font-bold">
        <span>Desconectar</span>
        <sl-icon 
            name="box-arrow-left" id="logout" 
            style="font-size: 1.5rem;"
        ></sl-icon>
    </a>
</div>