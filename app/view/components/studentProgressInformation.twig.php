<sl-dialog label="Informações de Progresso" class="dialog-scrolling" style="--width: min(650px, 95%) ; overflow:auto">

    <div class="flex flex-col items-stretch justify-start md:flex-row md:justify-center md:items-center gap-[1rem] w-full">
        <div class="flex flex-col justify-center items-start">
            <h2 class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span class="font-bold text-lg uppercase font-mukta">Total de Pontos:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-[#303030]">{{session.totalScore}}</span>  
                    <sl-icon name="fire" style="color: #e25822"></sl-icon> 
                </span>
            </h2>

            <h2 class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span  class="font-bold text-lg uppercase font-mukta">Módulo atual:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-[#303030]">{{session.actualModule}}</span>  

                    <sl-icon name="book" style="color:hsl(252, 100%, 68%)"></sl-icon> 
                </span>
            </h2> 
        </div>

        <div class="flex flex-col flex-1 justify-start items-stretch">
            <h2  class="font-bold text-lg uppercase font-mukta">Progresso:</h2>
            <sl-progress-bar value="{{session.progressInPorcentage}}" class="progress-bar-values"  style="
                --track-color: hsl(281, 100%, 95%); 
                --indicator-color: hsl(252, 100%, 68%);
                --width:100%;
                --height: 1.5rem;
                flex: 1;
            ">{{session.progressInPorcentage}} %</sl-progress-bar>
        </div>
    </div>


    <ul class="w-full list-none grid grid-flow-row gap-4 my-6 mx-auto">

        {% set modules = [
                session.progress.module1,
                session.progress.module2,
                session.progress.module3,
                session.progress.module4,
                session.progress.module5,
                session.progress.module6,
                session.progress.module7
            ]
        %}

        {% for module in modules %}
            <li data-tilt  data-tilt-speed="2000" data-tilt-perspective="5000" data-tilt-scale="1.05">
                <div class="flex flex-row items-center justify-between gap-[1.5rem] flex-wrap cursor-default p-6 border-2 border-darkpurple rounded-xl drop-shadow-xl bg-lightpurple">

                    <span class="font-bold text-lg uppercase font-mukta">Módulo {{loop.index}}</span>

                    <div class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                        <span class="text-[{{module ? '#228B22' : '#ff8a05' }}] flex flex-row items-center">
                            <sl-icon name="{{module ? 'check-circle-fill' : 'clock-history' }}"></sl-icon> 
                        </span>

                        <span class="text-md font-normal text-[#303030]">{{module ? 'concluído' : 'pendente'}} | <strong> pontos:</strong> {{module ?: '?'}}</span>  
                    </div>

                   <div class="flex flex-row items-center justify-start gap-[1rem]">
                        <a href="{{BASE}}modules/0{{loop.index}}" class="text-[#0050EE] underline underline-offset-4">Estudar</a>
                        <span> | </span>
                        <a href="{{BASE}}modules/0{{loop.index}}/exam" class="text-[#0050EE] underline underline-offset-4">Exame</a>
                   </div>

                </div>  
            </li>
        {% endfor %}
    </ul>

    <sl-button slot="footer" variant="danger">Fechar</sl-button>
</sl-dialog>