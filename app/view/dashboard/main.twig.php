{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}

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

{% set descriptions = [
    'Apresentação do curso de lógica de programação. Você aprenderá o que é algoritmo, lógica de programação quais os tipos de desenvolvedores que existem e muito mais',

    'Se você está curioso sobre os tipos de dados que existem dentro da programação, esse é o módulo certo para você. O Módulo 2 aborda os principais tipos de dados e métodos dentro do portugol',

    'Os Operadores aritméticos são usados constantemente em nossa vida escolar e também profissional como programadores. Aqui você irá estudar e aprender quais são eles, treinando assim sua lógica',

    'A partir daqui você começara a escrever seus primeiros códigos com manipulação de dados. Se você teve dúvida até agora de como armazenar os valores em algum lugar, você aprenderá como declarar constantes váriaveis, matrizes e muito mais',
    
    'As vezes queremos que nosso código execute procedimentos diferentes dependendo do resultado de uma operação. Aqui você aprenderá o que são as condicões, laços de repetição e casos de escolha',

    'Os Operadores relacionais são constantementes usados para validar mais de uma informação, da mesma forma, podemos criar condições aninhadas para diferentes casos. Aqui você aprenderá as Decições Simples e múltiplas',

    'Se você chegou até aqui e quer expandir seu conhecimento chegou a hora de aprender um pouco sobre o que é HTML CSS e Python'
  ]
%}


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
      <div class="my-[1rem] mx-[1rem] md:mx-[1.5rem]">

        <div class="w-full flex flex-row flex-wrap items-stretch justify-start gap-[1rem] my-[1rem] mx-auto">
            {% for module in modules %}
              <sl-card class="card-footer w-full min-w-[19rem] md:max-w-[19rem] flex-1 relative" data-tilt  data-tilt-speed="2000" data-tilt-perspective="5000" data-tilt-scale="1.05">

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

  .card-footer::part(body){
    height: 100%;
  }

  .card-footer::part(base){
    background-color: #F5F5F5;
    border: 0.0625rem solid hsl(255, 45%, 41%);
    color: #27242A;
    box-shadow: 0.3px 0.3px 0.3px grey;
    flex: 1;
    height: 100%;
  }

  .card-footer:hover::part(base){
    border: 0.0625rem solid hsl(252, 100%, 68%);
  }

  html.dark .card-footer::part(base){
    background-color: #332F37;
    color: #DADDE1;
    border: 0.0625rem solid hsl(252, 100%, 68%)
  }

  html.dark .card-footer:hover::part(base){
    border-color: hsl(32, 100%, 61%);
  }

  .card-footer [slot='footer'] {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-height:4rem;
  }

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