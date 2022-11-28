{% set class = "oi" %}

{% if session.classroom|length > 0 %}
    <section class="w-full">
        <h1 class="font-nerko font-normal text-4xl text-orange my-[0.8rem] max-w-[56.25rem] mx-auto">Turmas</h1>

        <div class="w-full flex-1 py-[0.5rem] flex flex-row items-start justify-between px-[1rem] gap-[1rem] rounded-md shadow-md max-w-[56.25rem] mx-auto">
            <a href="{{BASE}}signup-class" class="font-bold font-nerko text-2xl text-eerie bg-lightpurple px-[0.8rem] py-[0.5rem] flex flex-row items-center justify-center gap-[0.5rem] w-[9.375rem] rounded-md shadow-md">
                <p>Criar</p>
                <i class="ph-plus"></i>
            </a>
        </div>

        <div class="w-full max-w-[56.25rem] mx-auto overflow-x-auto my-[1.5rem]" id="table">
            <table class="w-full min-w-[43.75rem] ">
                <thead class="w-full border-none">
                    <tr class="text-left h-[4rem]">
                        <th class="font-nerko text-4xl text-orange font-normal">Nome</th>
                        <th class="font-nerko text-4xl text-orange font-normal">Código</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    {% for class in session.classroom %}
                        <tr class=" w-full p-[2rem] border-y-2 border-[#808080] border-collapse cursor-pointer" onclick='const dialogStudents = document.querySelector(".dialog-scrolling"); dialogStudents.show();const table = document.querySelector("#students_table_view");const thereAreStudents = "{{session.students|length > 0 }}"; const thereAreStudentsInClass = "{{session.students|filter(student=> student.classcode==class.code)|length > 0}}";if(thereAreStudents && thereAreStudentsInClass){table.innerHTML=` <table class="w-full min-w-[43.75rem]"> <thead class="border-none"> <tr class="text-left h-[4rem]"> <th class="font-nerko text-4xl text-orange font-normal">Alunos</th> </tr></thead> <tbody>{% for student in session.students|filter(student=> student.classcode==class.code)|sort((a,b)=> b.scores[0] - a.scores[0]) %}<tr class="p-[2rem] border-y-2 border-[#808080] border-collapse"> <td class="flex flex-row flex-wrap items-center gap-[2rem] justify-between my-[1rem]"> <div class="flex flex-row items-center justify-start gap-[1rem]"><sl-avatar data-tilt data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="avatars" image="{{student.avatar}}" shape="circle" label="{{student.name}}" style="--size:4rem;" ></sl-avatar> <div> <p class="text-xl font-bold text-eerie dark:text-grey my-[0.5rem] flex flex-row items-center gap-[1rem]"> <span>{{student.name}}</span>{% if student.id==session.extra.id %}<sl-badge variant="danger">você</sl-badge>{% endif %}</p><sl-progress-bar value="{{student.scores[1]}}" class="progress-bar-values" style="--label-color:white; --indicator-color:hsl(255, 45%, 41%); --height:1rem">{{student.scores[1] ?? 0}}%</sl-progress-bar> </div> </div> <div class="relative flex flex-row items-center justify-start gap-[1rem]"><sl-dropdown class="dropdown"> <sl-button slot="trigger" size="small" pill class="dropdown_trigger">mais</sl-button> <div class="w-full h-auto max-w-[43.75rem] bg-white dark:bg-eerie text-eerie dark:text-grey p-[2rem] rounded-lg"> <ul class="flex flex-col items-start justify-start gap-[1rem]"> <h1 class="my-[1rem] font-nerko text-orange text-2xl font-normal w-full text-left">{{student.name}}</h1>{% for module in student.modules%}<li class="flex flex-row items-center justify-start gap-[1rem]"> <span class="text-[{{module ? "#228B22" : "#ff8a05"}}] flex flex-row items-center gap-[0.6rem]"> <sl-icon name="{{module ? "check-circle-fill" : "clock-history"}}"></sl-icon> </span> <span class="flex flex-row items-center justify-start gap-[1rem] text-md font-normal text-eerie dark:text-grey">{{module ? "concluído" : "pendente"}}<span>Módulo {{loop.index}} - {{module}} / 80</span> </li>{% endfor %}</ul> </div></sl-dropdown> <span class="text-[#303030] dark:text-grey font-roboto text-lg font-bold flex flex-row items-center gap-[0.8rem]">{% if loop.index==1 %}<i class="ph-crown" style="color: #D4Af37; font-weight:bold; font-size:1.5rem;"></i>{% endif %}{{student.scores[0] ?? 0}}<sl-icon name="fire" style="color: #e25822"></sl-icon> </span> </div></td></tr>{% endfor %}</tbody> </table>`}else{table.innerHTML=`<div class="my-[1rem] w-full flex items-center justify-center flex-col"><p class="text-eerie dark:text-grey font-mukta text-3xl font-bold text-center my-[0.5rem]">Não há estudantes cadastrados nessa turma. compartilhe o código da sala</p></div>`}'>
                            <td>
                                <p class="text-2xl font-bold text-eerie dark:text-grey my-[1rem]">{{class.name}}</p>
                            </td>
                            <td>
                                <p class="text-2xl font-bold text-eerie dark:text-grey my-[1rem]"> {{class.code}}</p>
                            </td>
                            <td class="sticky top-[10px] top-[50%] translate-y-[20%] my-[1rem] text-[#303030] dark:text-grey font-roboto text-lg font-bold flex flex-row items-center gap-[0.8rem]">
                                <i class="ph-hand-pointing-bold text-2xl"></i>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </section>

    <sl-dialog label="Lista" class="dialog-scrolling" id="students_table_view" style="--width: min(50rem, 95%); overflow:auto"></sl-dialog>

    <style>
        .dropdown_trigger::part(base){
    
            background-color: #D71C6D;
            border:none;
            color: white;
            font-weight: bold;
            font-size: 0.9rem;
            
        }

        .dropdown::part(panel){
            background-color: #f0f2f5;
            color:#27242A;
            border-radius: 0.25rem;    
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            width: 25rem;
            box-shadow: 1px 1px 5px grey;
            border: 1px solid hsl(252, 100%, 68%);
        }

        html.dark .dropdown::part(panel){
            background-color: #27242A;
            color:#DADDE1;
        }

        .dropdown::part(base){
            border-radius: 0.25rem;
        }
    </style>

    <style>

        .dialog-scrolling::part(close-button__base):hover {
            color: hsl(252, 100%, 68%);
        }

        html.dark .dialog-scrolling::part(panel) {
            background-color: #27242A;
            width: 100%;
            max-width: 800px;
            color: white;
        }

        html.dark .dialog-scrolling::part(title) {
            color: white;
        }

        html.dark .dialog-scrolling::part(close-button__base) {
            color: white;
        }

        .avatar::part(base){
            border: 2px solid hsl(252, 100%, 68%);
        }
            
        html.dark .avatar::part(base){
            border: 2px solid white;
        }

    </style>

    <style>

        .avatars::part(base){
            border: 2px solid hsl(252, 100%, 68%);
        }

        html.dark .avatars::part(base){
            border: 0.125rem solid white;
        }

        .progress-bar-values::part(base){
            border-radius: 0.25rem;
            border: 0.0625rem solid #181818;
            width: 18.75rem;
            height:1.5rem;
        }

        .progress-bar-values::part(label){
            position: absolute;
            top:50%;
            transform: translateY(-50%);

        }

        html.dark .progress-bar-values::part(base){
            border: 0.0625rem solid #bdbdbd;
        }
    </style>
{% else %}
    <section class="w-full px-[1rem] min-h-[70vh] py-[1.5rem] flex flex-col items-center justify-center flex-wrap">
        <h1 class="text-3xl font-nerko font-normal uppercase text-orange w-full mx-auto text-center">Você não criou nenhuma turma ainda.</h1>

        <p class="text-xl font-mukta font-medium text-eerie dark:text-grey w-full mx-auto text-center my-[1.5rem]">Deseja criar sua primeira turma?</p>

        <a href="{{BASE}}signup-class" title="Criar Turma" class="my-[1rem] p-[1rem] w-full max-w-[11.25rem] rounded-md shadow-sm text-white bg-pink-500 transition-all text-center ease-linear duration-200 hover:-translate-y-[0.1875rem]">
            Criar Turma
        </a>
    </section>
{% endif %}
