
<!-- MODAL TO SHOW PROGRESS INFORMATION  -->
{% if session.perfil == 'student' %}
    {% embed "components/studentProgressInformation.twig.php" %}{% endembed %}
{% endif %}

<div class="bg-[#fff] text-black min-h-screen max-h-screen overflow-y-auto sticky top-0 z-1 overflow-y-auto overflow-x-hidden border-r-2 border-[#808080] p-4 m-r-4 min-w-[260px] max-w-[260px] scroll-less-visible">

    <div id="user_information_session" class="w-full text-center flex flex-col gap-[1rem] items-center justify-start">

        <sl-avatar
            image="{{session.avatar}}"
            shape="circle"
            label="{{ session.name }}"
            style="--size:6rem"
        ></sl-avatar>

        <p class="w-full font-bold text-lg font-mukta text-center ">{{ session.name }}</p>

        <sl-badge variant="primary" pill pulse>{{session.perfil == 'student' ? "Estudante" : session.perfil == 'school' ? "Escola": session.perfil == 'teacher' ? "Professor" : 'Administrador'}}</sl-badge>
    </div>

    {% if session.perfil == 'student' %}
        <p class="my-6 w-full text-left text-xl leading-[1.5rem] text-[#808080] font-medium  font-mukta">Desumilde jamais. Não é orgulho, é postura!</p>
    {% endif %}

    {% if session.perfil == 'student' %}
        <ul class="w-full list-none flex flex-col justify-start items-stretch cursor-default">
            <li class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span class="font-bold text-lg uppercase font-mukta">Pontuação:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-[#303030]">{{session.totalScore}}</span>  
                    <sl-icon name="fire" style="color: #e25822"></sl-icon> 
                </span>
            </li>
            <li class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span  class="font-bold text-lg uppercase font-mukta">Módulo:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-[#303030]">{{session.actualModule}}</span>  

                    <sl-icon name="book" style="color:hsl(252, 100%, 68%)"></sl-icon> 
                </span>
            </li> 
        </ul>
    {% endif %}

    {% if session.perfil == 'student' %}
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="w-full mt-4 text-center text-purple font-bold mt-4 p-4 py-8 border-2 border-lightpurple rounded-md drop-shadow-sm cursor-pointer" id="showProgressInfo">
            <sl-progress-ring value="{{session.progressInPorcentage}}" class="progress-ring-values" style=" 
            --track-color: hsl(281, 100%, 95%); 
            --track-width:0.5rem;
            --indicator-color: hsl(252, 100%, 68%);
            --indicator-width:0.7rem;"
            >
                {{ session.progressInPorcentage }} %
            </sl-progress-ring>

            <p class="font-bold text-lg uppercase font-mukta mt-2">Progresso</p>
        </div>   
    {% endif %}


    <div class="w-full p-2 sticky top-[100%] left-0 right-0 ">
        <img src="{{BASE}}svgs/techbo_challenges.svg" alt="techbô image"/>
    </div>
</div>