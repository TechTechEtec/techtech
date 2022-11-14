<div id="layout-menu" tabindex="0" onblur="closeMenu()" class="fixed z-[100] top-0 left-[-230px] w-[280px] h-screen flex justify-start items-stretch flex-col transitiom-all ease-out gap-[0.5rem] duration-300 bg-lightpurple text-darkerPurple overflow-y-auto drop-shadow-lg pr-[4px]">

    <!-- TOGGLE BUTTON -->
    <div class="sticky top-0 left-0 bg-lightpurple flex items-center justify-between w-full pl-2 pr-[4px]">
        <h2 class="text-4xl font-bold text-darkerPurple font-mukita mb-4">Menu</h2>

        <button onclick="toggleMenu()" class="text-4xl font-bold ease-linear transition-all duration-300" id="openMenuButton">
            <i class="ph-list" style="color:#101241"></i>
        </button>
    </div>

    <!-- DASHBOARD -->
    <a href="{{BASE}}dashboard" title="Dashboard" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] hover:border-purple border-2 border-transparent  rounded-r-lg" id="menu-dashboard">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">Dashboard</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-house" style="color:#101241"></i>
        </span>
    </a>

    <!-- MODULES -->
    <a href="#" title="Módulos" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg" id="menu-modules">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">Módulos</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-book-open" style="color:#101241"></i>
        </span>
    </a>

     <!-- ACTIVITIES -->
    <a href="#" title="Atividades" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg" id="menu-activities">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">Atividades</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-file-search" style="color:#101241"></i>
        </span>
    </a>

     <!-- CLASS -->
    <a href="#" title="Turma" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg" id="menu-class">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">Turma</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-users" style="color:#101241"></i>
        </span>
    </a>

    <!-- PLAYGROUND -->
    <a href="{{BASE}}playground" title="Turma" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg" id="menu-playground">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">PlayGround</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-terminal-window" style="color:#101241"></i>
        </span>
    </a>

     <!-- CONFIGURATIONS -->
    <a href="#" title="Configurações" class="flex flex-row items-center justify-between w-full pl-2 py-[6px] pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg" id="menu-configurations">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">Configurações</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-gear-six" style="color:#101241"></i>
        </span>
    </a>

     <!-- HELP -->
    <a href="#" title="Ajuda" class="flex flex-row items-center justify-between w-full pl-2 py-[6px]  pr-[4px] cursor-pointer hover:bg-[#7c5cff6a] border-2 border-transparent hover:border-purple rounded-r-lg" id="menu-help">
        <p class="text-2xl font-bold text-darkerPurple font-mukita">Ajuda</p>

        <span class="text-4xl font-bold text-center flex items-center justify-center">
            <i class="ph-question" style="color:#101241"></i>
        </span>
    </a>


    <!-- LOGOUT BUTTON -->
    <a href="{{BASE}}@logout" title="logout" class="p-4 sticky top-[110%] rounded-tr-lg z-[101] flex flex-row justify-between items-center gap-[0.5rem] transition-all ease-linear duration-200 hover:bg-darkpurple text-darkpurple hover:text-white text-lg font-bold">
        <span>Desconectar</span>
        <sl-icon 
            name="box-arrow-left" id="logout" 
            style="font-size: 1.5rem;"
        ></sl-icon>
    </a>
</div>