{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}

{% set modules = [
    session.modules[0],
    session.modules[1],
    session.modules[2],
    session.modules[3],
    session.modules[4],
    session.modules[5],
    session.modules[6]
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
      {% embed "partials/dashboard_student/painel.twig.php" %} {% endembed %}
    </sl-tab-panel>

    <!-- CLASS TAB CONTENT -->
    <sl-tab-panel name="classroom">
      {% embed "partials/dashboard_student/classroom.twig.php" %} {% endembed %}
    </sl-tab-panel>

    <sl-tab-panel name="configuration"> 
      {% embed "partials/dashboard_student/configuration.twig.php" %} {% endembed %}
    </sl-tab-panel>

    <sl-tab-panel name="help">
      {% embed "partials/dashboard_student/help.twig.php" %} {% endembed %}
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