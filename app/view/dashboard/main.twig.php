{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
<div class="md:ml-[17.5rem]">
  <sl-tab-group id="tab-group">

    <!-- TABS -->
    <sl-tab slot="nav" panel="dashboard" class="tab">
      <h1 class="text-3xl font-nerko">Painel</h1>
    </sl-tab>

    <sl-tab slot="nav" panel="classroom" class="tab">
      <h1 class="text-3xl font-nerko" >Sala de aula</h1>
    </sl-tab>

    <sl-tab slot="nav" panel="configuration" class="tab">
      <h1 class="text-3xl font-nerko" >Configurações</h1>
    </sl-tab>

    <sl-tab slot="nav" panel="help" class="tab">
      <h1 class="text-3xl font-nerko" >Ajuda</h1>
    </sl-tab>
        
    <!-- PERFIL TAB CONTENT -->
    <sl-tab-panel name="dashboard">
      <div class="flex flex-col items-stretch justify-start md:flex-row md:justify-center md:items-center gap-[1rem] w-full">
          <div class="flex flex-col justify-center items-start">
              <h2 class="flex flex-row items-center justify-start gap-[1.5rem]">
                  <span class="font-bold text-lg uppercase font-mukta">Total de Pontos:</span>
                  <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                      <span class="text-md font-normal text-eerie dark:text-grey">{{session.totalScore}}</span>  
                      <sl-icon name="fire" style="color: #e25822"></sl-icon> 
                  </span>
              </h2>

              <h2 class="flex flex-row items-center justify-start gap-[1.5rem]">
                  <span  class="font-bold text-lg uppercase font-mukta">Módulo atual:</span>
                  <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                      <span class="text-md font-normal text-eerie dark:text-grey">{{session.actualModule}}</span>  

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

      <ul class="w-full list-none flex flex-col items-stretch justify-start gap-[1rem] my-6 mx-auto">
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
                  <div class="flex flex-row items-center justify-between gap-[1.5rem] flex-wrap cursor-default p-6 border-2 border-darkpurple rounded-xl drop-shadow-xl bg-lightpurple dark:bg-lighteerie">

                      <span class="font-bold text-lg dark:text-white uppercase font-mukta">Módulo {{loop.index}}</span>

                      <div class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                          <span class="text-[{{module ? '#228B22' : '#ff8a05' }}] flex flex-row items-center">
                              <sl-icon name="{{module ? 'check-circle-fill' : 'clock-history' }}"></sl-icon> 
                          </span>

                          <span class="text-md font-normal text-eerie dark:text-grey">{{module ? 'concluído' : 'pendente'}} | <strong>{{module ?: '?'}}</strong>/80</span>  
                      </div>

                    <div class="flex flex-row items-center justify-start gap-[1rem]">
                          <a href="{{BASE}}modules/0{{loop.index}}" class="text-[#0050EE] dark:text-blue underline underline-offset-4">Estudar</a>
                          <span> | </span>
                          <a href="{{BASE}}modules/0{{loop.index}}/exam" class="text-[#0050EE] dark:text-blue underline underline-offset-4">Exame</a>
                    </div>

                  </div>  
              </li>
          {% endfor %}
      </ul>
    </sl-tab-panel>

    <!-- CLASS TAB CONTENT -->
    <sl-tab-panel name="classroom">
      <div class="flex gap-[6rem] justify-around">
        <h1 class="text-4xl text-orange font-nerko">
          Administradores
        </h1>

        <h1 class="text-4xl text-orange font-nerko">
          5ª Série
        </h1>

      </div>

      <div class="flex gap-[2rem] justify-around">
        <p class="text-lg font-bold">Roberto Neri</p>       
        <p class="text-lg font-bold">Professor Xavier</p>
      </div>

      <div class="flex gap-[15rem] justify-start mt-[5rem]">
          <h2 class="text-4xl text-orange font-nerko">
            Alunos
          </h2>

          <h2 class="text-4xl text-orange font-nerko">
            3° Módulo
          </h2>
      </div>

      <div class="flex justify-start mt-6">
        <div class="grid gap-[240px] grid-cols-2 grid-row-2">
          <div class="space-y-4">
            <p class="text-lg font-bold mt-2">
              Aleksander Morozova
              <sl-progress-bar value="67"></sl-progress-bar>
            </p>

            <p class="text-lg font-bold mt-2">
              Giovana Nocera
              <sl-progress-bar value="59"></sl-progress-bar>
            </p>

            <p class="text-lg font-bold mt-2">
              Thiago Muratian
              <sl-progress-bar value="48"></sl-progress-bar>
            </p>               
          </div>

          <div class="space-y-8 mt-8">
            <p class="text-lg font-bold mt-2">67%</p>
            <p class="text-lg font-bold mt-2">59%</p>
            <p class="text-lg font-bold mt-2">48%</p>
          </div>

        </div>
      </div>
    </sl-tab-panel>

    <sl-tab-panel name="configuration"> 

      <h1 class="text-3xl text-lightpurple my-4 font-nerko uppercase">Gerais</h1>

      <form method="post" action="{{BASE}}@update-student">

        <div class="flex flex-col items-start justify-start md:flex-row flex-wrap md:items-center md:justify-between gap-[1rem] py-[1rem] w-full">
          <div class="flex flex-col gap-[0.5rem] flex-1">
            <label class=" text-xl font-bold text-eerie dark:text-grey" for="nome">Nome</label>
            <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="text" id="nome" name="name" value="{{session.name}}">
          </div>  
          
          <div class="flex flex-col gap-[0.5rem] flex-1">
            <label class=" text-xl font-bold text-eerie dark:text-grey" for="email">E-mail</label>
            <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="email" id="email" name="email" value="{{session.email}}">
          </div>
        </div>

        <div class="flex flex-col items-start justify-start md:flex-row flex-wrap md:items-start md:justify-between gap-1rem md:gap-[2rem] py-[1rem] w-full">
          <div class="flex flex-col gap-[0.5rem] flex-1">
            <label class="mt-4 text-xl font-bold text-eerie dark:text-grey" for="bio">Biografia</label>
            <textarea class="bg-grey rounded-lg h-[8rem] min-h-[8rem] w-full min-w-[24rem] max-w-[24rem]" type="text" id="bio" name="bio">{{session.bio}}
            </textarea>
          </div>

          <div class="flex-1">
              <div class="flex flex-col gap-[0.5rem]  mt-4">
                <label class="text-xl font-bold text-eerie dark:text-grey" for="old_password">Senha Antiga</label>
                <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="password" name="old_password" id="new_password">
              </div>

              <div class="flex flex-col gap-[0.5rem] mt-4">
                <label class="text-xl font-bold text-eerie dark:text-grey" for="new_password">Nova Senha</label>
                <input class="bg-grey rounded-lg h-[2rem] w-full max-w-[16rem]" type="password" name="new_password" id="new_password">
              </div>
          </div>
        </div>
                    
        <button class="w-full max-w-[9rem] rounded-md shadow-sm cursor-pointer transition-all ease-linear duration-200 hover:-translate-y-[2px] bg-pink-500 text-white font-bold text-sm py-2 mt-8">Confirmar</button>
      </form>

      <hr class="shadow-md my-6">

      <!-- Conta -->
      <h2 class="text-3xl text-lightpurple my-4 font-nerko uppercase">Conta</h2>

      <div class="grid grid-cols-1 2sm:grid-cols-2 text-eerie dark:text-grey gap-8">
        <div class="flex flex-col items-start justify-start gap-2">
          <h2 class="text-xl mt-[1rem] font-bold">Categoria</h2>
          <p>{{session.perfil == 'student' ? "Estudante" : session.perfil == 'school' ? "Escola": session.perfil == 'teacher' ? "Professor" : 'Administrador'}}</p>
        </div>

        <div class="flex flex-col items-start justify-start gap-2">
          <h2 class="text-xl mt-2 font-bold ">Data de nascimento</h2>
          <p>{{session.extra.birthday|date("d/m/Y")}}</p>
        </div>

        <div class="flex flex-col items-start justify-start gap-2">
          <h2 class="text-xl mt-2 font-bold ">Escola</h2>
          <p>ETEC de Carapicuíba</p>
        </div>

        <div class="flex flex-col items-start justify-start gap-2">
          <h2 class="text-xl mt-2 font-bold ">Turma</h2>
          <p>5ª Série</p>
        </div>
      </div>

      <h2 class="text-3xl text-lightpurple my-4 font-nerko uppercase">Dark Mode</h2>

      {% embed "components/toggleDarkModeButton.twig.php" %}{% endembed %}

    </sl-tab-panel>

    <sl-tab-panel name="help">
    </sl-tab-panel>

  </sl-tab-group>   
</div>

<style>

  #tab-group::part(active-tab-indicator){
    border: 1px solid hsl(255, 45%, 41%);
  }

  html.dark #tab-group::part(active-tab-indicator){
    border: 1px solid hsl(252, 100%, 68%);
  }

  .tab::part(base):hover {
    color:hsl(255, 45%, 41%);
  }

  .tab::part(base){
    height:2.5rem;
    margin-right: 0.25rem;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem 0.25rem 0 0;
  }

  .tab[active]::part(base){
    color: #101241;
    background-color: hsl(281, 100%, 88%);
    height:2.5rem;
  }

  html.dark .tab::part(base):hover {
    color: white;
  }

  html.dark .tab[active]::part(base){
    color: white;
    background-color: hsl(255, 45%, 41%);
    height:2.5rem;
  }

</style>

{% endblock %}