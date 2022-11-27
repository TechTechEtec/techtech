{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
<div class="md:ml-[17.5rem]">
  <sl-tab-group id="tab-group">

    <!-- TABS -->
    <sl-tab slot="nav" panel="perfil" class="tab">
      <h1 class="text-3xl font-nerko">Perfil</h1>
    </sl-tab>

    <sl-tab slot="nav" panel="sala de aula" class="tab">
      <h1 class="text-3xl font-nerko" >Sala de aula</h1>
    </sl-tab>

    <sl-tab slot="nav" panel="configurações" class="tab">
      <h1 class="text-3xl font-nerko" >Configurações</h1>
    </sl-tab>

    <sl-tab slot="nav" panel="ajuda" class="tab">
      <h1 class="text-3xl font-nerko" >Ajuda</h1>
    </sl-tab>
        
    <!-- PERFIL TAB CONTENT -->
    <sl-tab-panel name="perfil">

      <div>
        <!-- Perfil -->
        <div class="grid grid-cols-1 2sm:grid-cols-2 gap-8">
          <div class="flex flex-col gap-2">
            <label class=" text-xl font-bold text-eerie dark:text-grey" for="nome">Nome</label>
            <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
              type="text"
              id="nome">
          </div>          
          
          <div class="flex flex-col gap-2">
            <label class="text-xl font-bold text-eerie dark:text-grey" for="nome">Username</label>
            <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
            type="text"
            id="username">
          </div>
          
          <div class="flex flex-col gap-2">
            <label class="text-xl font-bold text-eerie dark:text-grey" for="nome">Conta</label>
            <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
            type="text"
            id="conta">
          </div>              
        </div>
      
        <div class="flex flex-col gap-2">
          <label class="mt-4 text-xl font-bold text-eerie dark:text-grey" for="bio">Bio</label>
          <textarea class="bg-grey rounded-lg h-[8rem] min-h-[8rem] w-full max-w-[28rem]"
          type="text" 
          id="bio"></textarea>
        </div>
      </div>

      <!-- Conta -->
      <h1 class="text-4xl text-lightpurple my-4 font-nerko">Conta</h1>

      <div class="grid grid-cols-1 2sm:grid-cols-2 text-eerie dark:text-grey gap-8">
        <div class="flex flex-col items-start justify-start gap-2">
          <h2 class="text-xl mt-2 font-bold">E-mail</h2>
          <p>eteccarapicuiba@etec.sp.gov.br</p>
        </div>

        <div class="flex flex-col items-start justify-start gap-2">
          <h2 class="text-xl mt-2 font-bold ">Data de nascimento</h2>
          <p>28/01/2005</p>
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
    </sl-tab-panel>

    <!-- CLASS TAB CONTENT -->
    <sl-tab-panel name="sala de aula">
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

    <sl-tab-panel name="configurações">
    </sl-tab-panel>

    <a id="help"><sl-tab-panel name="ajuda">
      <h1 class="text-5xl font-nerko text-darkpurple">Ajuda</h1>
      <h2 class="text-3xl mt-2 font-bold dark:text-white">Estudante</h2>
      <p class="text-xl font-bold">Onde posso baixar os mapas mentais? </p>
      <p>O que vou encontrar na sidebar? </p>
      <p>Onde posso dar meu feedback? </p>
      <p>O que é o Playground? </p>
      <p>Como funciona o playground? </p>
      <p>Porque tem módulos trancados no painel? </p>
      <p>Como eu entro em uma turma? </p>
      <p>Como eu saio de uma turma? </p>
      <p>Como eu mudo minha senha? </p>

      <h2 class="text-3xl mt-2 font-bold dark:text-white">Escolas e Professores</h2>
      <p>Onde vejo os módulos? </p>
      <p>Onde eu crio uma turma? </p>
      <p>Onde eu retiro um aluno? </p>
      <p>Onde eu adiciono um aluno? </p>
      
    </sl-tab-panel>
    </a>
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