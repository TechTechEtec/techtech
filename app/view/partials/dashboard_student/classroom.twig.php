{% if session.classcode %}
    <!-- Content if the student is into a classcode -->

    <section class="w-full">
        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="3000" data-tilt-scale="1.025" class="w-full flex flex-col items-around justify-center 2sm:flex-row 2sm:items-center 2sm:justify-around gap-[1rem] rounded-md shadow-lg max-w-[56.25rem] mx-auto p-[1rem]">
            <div class="w-full flex-1 p-[0.5rem] flex flex-col items-start justify-start">
                <h1 class="font-nerko font-normal text-4xl text-orange my-[0.8rem]">Administrador</h1>
                <div class="flex flex-row items-center justify-start gap-[1rem]">
                    <sl-avatar
                        class="avatars"
                        image="{{session.teacher.avatar}}"
                        shape="circle"
                        label="{{session.teacher.name}}"
                        style="--size:6rem;"
                    ></sl-avatar>
                    <p class="text-roboto font-bold text-xl text-eerie dark:text-grey">{{session.teacher.name}}</p>
                </div>
            </div>

            <div class="w-full flex-1 p-[0.5rem] flex flex-col items-start justify-start ">
                <h2 class="font-nerko font-normal text-4xl text-orange my-[0.8rem]">Turma</h2>
                <p class="text-roboto font-bold text-xl text-eerie dark:text-grey h-[4rem] flex items-center">{{session.classroom.name}}</p>
            </div>
        </div>

        <div class="w-full max-w-[56.25rem] mx-auto overflow-x-auto my-[1.5rem]">
            <table class="w-full min-w-[43.75rem] ">
                <thead class="border-none">
                    <tr class="text-left h-[4rem]">
                        <th class="font-nerko text-4xl text-orange font-normal">Alunos</th>
                    </tr>
                </thead>
                <tbody>
                    {% for student in session.classmates|sort((a, b) => b.scores[0] - a.scores[0]) %}
                        <tr class="p-[2rem] border-y-2 border-[#808080] border-collapse">
                            <td class="flex flex-row flex-wrap items-center gap-[2rem] justify-start my-[1rem] relative">
                                <sl-avatar
                                    data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025"
                                    class="avatars"
                                    image="{{student.avatar}}"
                                    shape="circle"
                                    label="{{student.name}}"
                                    style="--size:4rem;"
                                ></sl-avatar>
                                <div>
                                    <p class="text-xl font-bold text-eerie dark:text-grey my-[0.5rem] flex flex-row items-center gap-[1rem]">
                                        <span>{{student.name}}</span>
                                        {% if student.id == session.extra.id %}
                                            <sl-badge variant="danger">você</sl-badge>
                                        {% endif %}
                                    </p>
                                    <sl-progress-bar value="{{student.scores[1]}}" class="progress-bar-values" style="--label-color:white; --indicator-color:hsl(255, 45%, 41%); --height:1rem">{{student.scores[1] ?? 0}}%</sl-progress-bar>
                                </div>

                                <span class="absolute bottom-[0.3125rem] right-[1.25rem] text-[#303030] dark:text-grey font-roboto text-lg font-bold flex flex-row items-center gap-[0.8rem]">
                                    {% if loop.index == 1 %}
                                        <i class="ph-crown" style="color: #D4Af37; font-weight:bold; font-size:1.5rem;"></i>
                                    {% endif %}

                                    {{student.scores[0] ?? 0}}
                                    <sl-icon name="fire" style="color: #e25822"></sl-icon> 
                                </span>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </section>

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
    <!-- Content if the student is NOT into a classcode -->

    <section class="w-full px-[1rem] min-h-[70vh] py-[1.5rem] flex flex-col items-center justify-center flex-wrap">
        <h1 class="text-3xl font-nerko font-normal uppercase text-orange w-full mx-auto text-center">Você não está cadastrado em nenhuma turma</h1>

        <p class="text-xl font-mukta font-medium text-eerie dark:text-grey w-full mx-auto text-center my-[1.5rem]">Deseja entrar em uma turma?</p>

        <sl-dialog label="Entre em uma turma" class="dialog-scrolling" style="--width: min(31.25rem, 95%); overflow:auto">

            <img src="{{BASE}}svgs/techbo_new_adventures_unlocked.svg" alt="techbô" class="w-full h-full max-w-[18.75rem] mb-[1rem] mx-auto"/>

            <form method="post" action="{{BASE}}@enter-classroom" class="w-full">
                <div class="w-full flex-1">
                    <label for="classcode">Código da Turma</label>
                    <input type="text" name="classcode" id="classcode" placeholder="ABC123" required autocomplete="off" class="bg-grey rounded-md h-[2.5rem] w-full mt-[1rem] caret-purple focus:outline-purple focus:outline-1 text-eerie uppercase font-medium"/>
                </div>

                <button type="submit" class="flex-1 my-[2rem] p-[1rem] w-full rounded-md shadow-sm text-white bg-orange transition-all ease-linear duration-200 hover:-translate-y-[0.1875rem] text-lg font-bold">Confirmar</button>
            </form>
        </sl-dialog>

        <button id="enterInClassRoom" class="my-[1rem] p-[1rem] w-full max-w-[11.25rem] rounded-md shadow-sm text-white bg-pink-500 transition-all ease-linear duration-200 hover:-translate-y-[0.1875rem]">
            Entrar
        </button>
    </section>

    <style>

        .dialog-scrolling::part(close-button__base):hover {
            color: hsl(252, 100%, 68%);
        }

        html.dark .dialog-scrolling::part(panel) {
            background-color: #27242A;
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

{% endif %}
