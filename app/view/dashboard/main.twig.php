{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
<div class="">
  <sl-tab-group>
    <sl-tab slot="nav" panel="perfil">Perfil</sl-tab>
    <sl-tab slot="nav" panel="sala de aula">Sala de aula</sl-tab>
    <sl-tab slot="nav" panel="configurações">Configurações</sl-tab>
    <sl-tab slot="nav" panel="ajuda">Ajuda</sl-tab>

    <!-- Perfil -->
      <sl-tab-panel name="perfil">
          <h1 class="text-4xl text-lightpurple mt-4 font-nerko">
            Perfil
          </h1>
        <div class="grid grid-cols justify-between">

          <div>
            <label class="flex flex-col mt-4 text-xl font-bold" for="nome">Nome</label>
            <input class="bg-grey rounded-lg h-[2rem] "
              type="text"
              id="nome">
          </div>          
            
            <div>
              <label class="flex flex-col mt-4 text-xl font-bold" for="nome">Username</label>
              <input class="bg-grey rounded-lg h-[2rem]"
              type="text"
              id="username">
            </div>
            
            <div>
              <label class="flex flex-col mt-4 text-xl font-bold" for="nome">Conta</label>
              <input class="bg-grey rounded-lg h-[2rem]"
              type="text"
              id="conta">
            </div>
          
            <div>
              <label class="flex flex-col mt-4 text-xl font-bold" for="bio">Bio</label>
              <input class="bg-grey rounded-lg h-[8rem] w-[30rem]"
              type="text" 
              id="bio">
            </div>

          </div>

          <h1 class="text-4xl text-lightpurple mt-4 font-nerko">Conta</h1>

          <div class="">

            <div>
              <h2 class="text-xl mt-2 font-bold">
                E-mail
              </h2>
              <p>
                example@email.com
              </p>
            </div>

            <div>
              <h2 class="text-xl mt-2 font-bold ">
                Data de nascimento
              </h2>
              <p>
                DD/MM/AA
              </p>
            </div>

          </div>

      </sl-tab-panel>

    <sl-tab-panel name="sala de aula"></sl-tab-panel>
    <sl-tab-panel name="configurações"></sl-tab-panel>
    <sl-tab-panel name="ajuda"></sl-tab-panel>
  </sl-tab-group>   
</div>



{% endblock %}