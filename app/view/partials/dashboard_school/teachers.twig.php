{% if session.teacher|length > 0 %}
    <section class="w-full">
        <h1 class="font-nerko font-normal text-4xl text-orange my-[0.8rem] max-w-[56.25rem] mx-auto">Professores</h1>

        <div class="w-full flex-1 py-[0.5rem] flex flex-row items-start justify-between px-[1rem] gap-[1rem] rounded-md shadow-sm  max-w-[56.25rem] mx-auto">
            <a href="{{BASE}}signup-teacher-byschool" class="font-bold font-nerko text-2xl text-eerie bg-lightpurple px-[0.8rem] py-[0.5rem] flex flex-row items-center justify-center gap-[0.5rem] w-[9.375rem] rounded-md shadow-md">
                <p>Criar</p>
                <i class="ph-plus"></i>
            </a>
        </div>

        <div class="w-full max-w-[56.25rem] mx-auto overflow-x-auto my-[1.5rem]" id="table">
            <table class="w-full min-w-[43.75rem] ">
                <thead class="w-full border-none">
                    <tr class="text-left h-[4rem]">
                        <th class="font-nerko text-4xl text-orange font-normal">Nome</th>
                        <th class="font-nerko text-4xl text-orange font-normal">E-mail</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    {% for teacher in session.teacher %}
                        <tr class=" w-full p-[2rem] border-y-2 border-[#808080] border-collapse cursor-pointer">
                            <td>
                                <p class="text-2xl font-bold text-eerie dark:text-grey my-[1rem]">{{teacher.name}}</p>
                            </td>
                            <td>
                                <p class="text-2xl font-bold text-eerie dark:text-grey my-[1rem]"> {{teacher.email}}</p>
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

{% else %}
    <section class="w-full px-[1rem] min-h-[70vh] py-[1.5rem] flex flex-col items-center justify-center flex-wrap">
        <h1 class="text-3xl font-nerko font-normal uppercase text-orange w-full mx-auto text-center">Você não criou nenhum professor ainda.</h1>

        <p class="text-xl font-mukta font-medium text-eerie dark:text-grey w-full mx-auto text-center my-[1.5rem]">Deseja criar seu primeiro professor?</p>

        <a href="{{BASE}}signup-teacher-byschool" title="Criar Turma" class="my-[1rem] p-[1rem] w-full max-w-[11.25rem] rounded-md shadow-sm text-white bg-pink-500 transition-all text-center ease-linear duration-200 hover:-translate-y-[0.1875rem]">
            Criar Professor
        </a>
    </section>
{% endif %}
