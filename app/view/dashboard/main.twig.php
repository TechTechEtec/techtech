{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
<div class="">
  <sl-tab-group>

    <sl-tab slot="nav" panel="perfil">
      Perfil
    </sl-tab>

    <sl-tab slot="nav" panel="sala de aula">
      Sala de aula
    </sl-tab>

    <sl-tab slot="nav" panel="configurações">
      Configurações
    </sl-tab>

    <sl-tab slot="nav" panel="ajuda">
      Ajuda
    </sl-tab>
        
        <!-- Perfil -->
        <sl-tab-panel name="perfil">
          <h1 class="text-4xl text-lightpurple mt-4 font-nerko">
            Perfil
          </h1>
          <div class="">

            <div class="flex flex-col">
              <label class="mt-4 text-xl font-bold" for="nome">Nome</label>
              <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
                type="text"
                id="nome">
            </div>          
            
            <div class="flex flex-col">
              <label class="text-xl font-bold" for="nome">Username</label>
              <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
              type="text"
              id="username">
            </div>
            
            <div class="flex flex-col">
              <label class="text-xl font-bold" for="nome">Conta</label>
              <input class="bg-grey rounded-lg h-[2rem] w-[14rem]"
              type="text"
              id="conta">
            </div>
          
            <div class="flex flex-col">
              <label class="mt-4 text-xl font-bold" for="bio">Bio</label>
              <input class="bg-grey rounded-lg h-[8rem] w-[28rem]"
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
                eteccarapicuiba@etec.sp.gov.br
              </p>
            </div>

            <div>
              <h2 class="text-xl mt-2 font-bold ">
                Data de nascimento
              </h2>
              <p>
                28/01/2005
              </p>
            </div>

            <div>
              <h2 class="text-xl mt-2 font-bold ">
                Instituição
              </h2>
              <p>
                ETEC de Carapicuíba
              </p>
            </div>

            <div>
              <h2 class="text-xl mt-2 font-bold ">
                Série
              </h2>
              <p>
                5ª Série
              </p>
            </div>

            <div>
              <h2 class="text-xl mt-2 font-bold ">
                Senha
              </h2>
              <p>
                ********
              </p>
            </div>

          </div>
        </sl-tab-panel>

        <!-- sala de aula -->
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

          <div class="flex gap-[25rem] justify-center mt-[5rem]">
              <h2 class="text-4xl text-orange font-nerko">
                Alunos
              </h2>

              <h2 class="text-4xl text-orange font-nerko">
                3° Módulo
              </h2>
          </div>

          <div class="flex justify-around mt-6">
            <div class="grid gap-[360px] grid-cols-2 grid-row-2">
              <div>
                <p class="text-lg font-bold mt-2">Aleksander Morozova</p>
                <p class="text-lg font-bold mt-2">Giovana Nocera</p>
                <p class="text-lg font-bold mt-2">Thiago Muratian</p>               
              </div>

              <div>
                <p class="text-lg font-bold mt-2">67%</p>
                <p class="text-lg font-bold mt-2">59%</p>
                <p class="text-lg font-bold mt-2">48%</p>
              </div>

            </div>
          </div>

        </sl-tab-panel>

        <sl-tab-panel name="configurações">

        </sl-tab-panel>

        <sl-tab-panel name="ajuda">

        </sl-tab-panel>

  </sl-tab-group>   
</div>



{% endblock %}