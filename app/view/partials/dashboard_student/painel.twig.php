<div class="my-[1rem] mx-[1rem] md:mx-[1.5rem]">

<div class="w-full flex flex-row flex-wrap items-stretch justify-start gap-[1rem] my-[1rem] mx-auto">
    {% for module in modules %}
      <sl-card class="card-footer w-full min-w-[17rem] md:max-w-[19rem] flex-1 relative" data-tilt  data-tilt-speed="2000" data-tilt-perspective="5000" data-tilt-scale="1.05">

        <!-- Block Layer -->

        {%  if loop.index != 1 and not modules[loop.index - 2] %}
          <div class="bg-[#0000007F] dark:bg-[#0000009F] absolute w-full h-full top-0 left-0 right-0 bottom-0 flex items-center justify-center flex-col z-[5] text-5xl font-bold text-white">
          <i class="ph-lock"></i>
          </div>
        {% endif %}

        <div class="w-full flex flex-row items-center justify-between flex-wrap">
          <h2 class="font-bold text-xl dark:text-white uppercase font-mukta">Módulo {{loop.index}}</h2>

          <div class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
              <span class="text-[{{module ? '#228B22' : '#ff8a05' }}] flex flex-row items-center">
                  <sl-icon name="{{module ? 'check-circle-fill' : 'clock-history' }}"></sl-icon> 
              </span>

              <span class="text-md font-normal text-eerie dark:text-grey">{{module ? 'concluído' : 'pendente'}}   
          </div>
        </div>

        <p class="w-full pt-[2rem] px-[0.8rem] text-eerie dark:text-grey text-left text-sm font-mukta font-normal">
          {{descriptions[loop.index - 1]}}
        </p>

        <div slot="footer">
          <span class="text-eerie dark:text-grey">
            <strong>{{module != null ? module : '-'}}</strong> / 80
          </span>

          <div class="flex flex-row items-center justify-start gap-[1rem]">
            <a href="{{BASE}}modules/0{{loop.index}}" class="text-[#0050EE] dark:text-blue underline underline-offset-4">Estudar</a>
          
            <a href="{{BASE}}modules/0{{loop.index}}/exam" class="text-[#0050EE] dark:text-blue underline underline-offset-4">Exame</a>
          </div>
        </div>
      </sl-card>
    {% endfor %}
</div>
</div>