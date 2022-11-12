<div class="bg-[#fff] text-black min-h-screen sticky top-0 z-1 overflow-y-auto overflow-x-hidden border-r-2 border-[#808080] p-4 m-r-4 min-w-[260px] max-w-[260px]">

    <div id="user_information_session" class="w-full text-center flex flex-col gap-[1rem] items-center justify-start">

        <sl-avatar
            image="{{session.avatar}}"
            shape="circle"
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
            <span class="text-xl font-roboto "> {{ session.progressInPorcentage }} %</span>
        </li>
    </ul>

    <div class="w-full mt-4 mx-2 text-center text-purple font-bold">
        <sl-progress-ring value="{{session.progressInPorcentage}}" class="progress-ring-values" style="margin-bottom: .5rem; 
        --track-color: pink; 
        --indicator-color: hsl(252, 100%, 68%);">
        {{ session.progressInPorcentage }} %</sl-progress-ring>
    </div>

</div>