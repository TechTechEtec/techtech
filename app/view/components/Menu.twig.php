<div id="layout-menu" tabindex="0" onblur="closeMenu()" class="fixed z-[100] top-0 left-[-230px] w-[280px] h-screen flex justify-start items-stretch flex-col transitiom-all ease-out gap-[0.5rem] duration-200 bg-lightpurple border-r-[1px] shadow-sm dark:border-eerie dark:bg-lighteerie text-darkerPurple overflow-y-auto drop-shadow-lg pr-[4px]">

    <!-- TOGGLE BUTTON -->
    <div class="sticky pt-4 top-0 left-0 bg-lightpurple dark:bg-lighteerie transition-all ease-out duration-200 flex items-center justify-between w-full px-2 md:pr-[4px] text-darkerPurple dark:text-grey text-4xl font-bold dark:font-normal font-mukita mb-4">
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
    <a href="{{BASE}}summary" title="Módulos" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-modules">
        <p class="text-2xl">Módulos</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-book-open"></i>
        </span>
    </a>

     <!-- ACTIVITIES -->
    <a href="#" title="Atividades" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-activities">
        <p class="text-2xl">Atividades</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-file-search"></i>
        </span>
    </a>

     <!-- CLASS -->
    <a href="#" title="Turma" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-class">
        <p class="text-2xl">Turma</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-users"></i>
        </span>
    </a>

    <!-- PLAYGROUND -->
    <a href="{{BASE}}playground" title="Turma" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-playground">
        <p class="text-2xl">Playground</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-terminal-window"></i>
        </span>
    </a>

     <!-- CONFIGURATIONS -->
    <a href="#" title="Configurações" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-configurations">
        <p class="text-2xl">Configurações</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-gear-six"></i>
        </span>
    </a>

     <!-- HELP -->
    <a href="{{BASE}}dashboard#help" title="Ajuda" class="flex flex-row items-center justify-between w-full pl-2 py-[6px]  pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg text-darkerPurple dark:text-grey font-bold dark:font-normal font-mukita" id="menu-help">
        <p class="text-2xl">Ajuda</p>

        <span class="text-4xl text-center flex items-center justify-center">
            <i class="ph-question"></i>
        </span>
    </a>

    <div class="p-4 sticky mt-[10rem]">
        {% embed "components/toggleDarkModeButton.twig.php" %}{% endembed %}
    </div>

    <!-- LOGOUT BUTTON -->
    <a href="{{BASE}}@logout" title="logout" class="p-4 sticky top-[150%] rounded-tr-lg z-[101] flex flex-row justify-between items-center gap-[0.5rem] transition-all ease-linear duration-200 hover:bg-darkpurple text-darkerPurple dark:text-grey hover:text-white text-lg font-bold">
        <span>Desconectar</span>
        <sl-icon 
            name="box-arrow-left" id="logout" 
            style="font-size: 1.5rem;"
        ></sl-icon>
    </a>
</div>