<div class="bg-white text-black md:dark:bg-lighteerie dark:bg-eerie dark:text-grey md:min-h-screen h-full flex-1 md:fixed overflow-y-auto top-0 bottom-0 z-1 overflow-y-auto overflow-x-hidden border-r-[0.0625rem] flex flex-col 2sm:flex-row md:flex-col items-start justify-start gap-0 2sm:gap-[1rem] md:gap-0 shadow-md dark:border-eerie p-[1rem] m-r-[1rem] min-w-[16.25rem] w-full py-[2rem] px-[3rem] md:p-[1rem] md:max-w-[16.25rem] scroll-less-visible">

    <div id="user_information_session" class="w-full 2sm:w-[40%] md:w-full text-center flex flex-1 md:flex-none flex-col gap-[1rem] items-center justify-stretch md:justify-start">

        <sl-avatar
            id="avatar_user"
            image="{{session.avatar}}"
            shape="circle"
            label="{{ session.name }}"
            style="--size:8rem"
        ></sl-avatar>

        <p class="w-full font-bold text-lg font-mukta text-center">{{ session.name }}</p>

        <sl-badge variant="primary" pill pulse>{{session.perfil == 'student' ? "Estudante" : session.perfil == 'school' ? "Escola": session.perfil == 'teacher' ? "Professor" : 'Administrador'}}</sl-badge>

        <hr class="border-1 mt-[1rem] border-solid border-grey w-full"/>

        <p class="mt-[1rem] w-full text-left text-md text-eerie dark:text-[#bdbdbd] font-medium  font-mukta">{{session.bio}}</p>
    </div>

    {% if session.perfil == 'student' %}

    <div class="w-full 2sm:w-[60%] md:w-full flex flex-1 md:flex-none flex-col items-start justify-stretch md:justify-start">
        <ul class="w-full list-none flex flex-col justify-start items-stretch cursor-default mt-[0.5rem]">
            <li class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span class="font-bold text-lg uppercase font-mukta">Pontuação:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-lighteerie dark:text-grey">{{session.scores[0] ?? 0}}</span>  
                    <sl-icon name="fire" style="color: #e25822"></sl-icon> 
                </span>
            </li>
            <li class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span  class="font-bold text-lg uppercase font-mukta">Módulo:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-lighteerie dark:text-grey">{{session.actualModule}}</span>  

                    <sl-icon name="book" class="text-darkpurple dark:text-purple"></sl-icon> 
                </span>
            </li> 
        </ul>

        <div data-tilt  data-tilt-speed="2000" data-tilt-perspective="5000" data-tilt-scale="1.05" class="w-full mt-[1rem] text-center text-purple font-bold mt-[1rem] p-[1rem] py-[2rem] border-2 border-lightpurple rounded-md drop-shadow-sm cursor-pointer" id="showProgressInfo">
            <sl-progress-ring value="{{session.scores[1]}}" class="progress-ring-values" style=" 
            --track-color: hsl(281, 100%, 95%); 
            --track-width:0.5rem;
            --indicator-color: hsl(252, 100%, 68%);
            --indicator-width:0.7rem;"
            >
                <p class="text-darkpurple dark:text-purple">{{ session.scores[1] ?? 0 }} %</p> 
            </sl-progress-ring>

            <p class="font-bold text-lg uppercase font-mukta mt-2">Progresso</p>
        </div>

        <p class="w-full text-center text-sm font-mukta text-lighteerie dark:text-grey my-[1rem]">Para obter o certificado é necessário ter um progresso de 75% de acertos nos exames</p>
        
        {% if session.scores[1] > 70 %}
            <button onclick="generate()" class="text-white bg-pink-500 rounded-full p-[0.8rem] shadow-md text-lg font-mukta font-bold text-center mx-auto" title="obter certificado">Obter Certificado</button>
            <a href="" class="hidden" id="download_certificate"></a>
        {% endif %}

    </div>

    {% endif %}
</div>

<script type="text/javascript">
    function generate() {
        const api_key = "1170MjUxODoyNTIwOmpLeXZtT1lva0dKc2puTTk";
        const dependentStudentTemplateId = "94077b2b2a4c0cdc";
        const independentStudentTemplateId = "89977b2b2a419b12";

        document.getElementById("downloading_message").classList.remove("hidden");

        const data = {
            "student": "{{session.name}}",
            "teacher": "{{session.teacher.name}}"
        };

        const json_payload = {
            "data": data,
            "template_id": independentStudentTemplateId,
            "output_file": "{{session.name}}.pdf",
            "direct_download": 1,
            "log": 0
        };

        if("{{session.teacher.name}}"){
            json_payload["template_id"] = dependentStudentTemplateId;
        }


        $.ajax({
            url: "https://api.craftmypdf.com/v1/create",
            async: true,
            method: "POST",
            headers: { "Content-Type": "application/json", "X-API-KEY": api_key },
            data: JSON.stringify(json_payload),
        })
            .done((response) => {
                const link = document.getElementById("download_certificate");

                link.setAttribute("href", response.file);
                link.click();

                document.getElementById("downloading_message").classList.add("hidden");

            }).fail((error) => {
                console.log(error);
            });
    }
</script>

<style>

    #avatar_user::part(base){
        border: 2px solid hsl(252, 100%, 68%);
    }

    html.dark #avatar_user::part(base){
        border: 2px solid white;
    }

</style>