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

      <form method="post" action="{{BASE}}">

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
            <textarea class="bg-grey rounded-lg h-[8rem] min-h-[8rem] w-full min-w-[24rem] max-w-[24rem]" type="text" id="bio" name="bio"></textarea>
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