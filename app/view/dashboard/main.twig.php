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
        <h1 class="text-4xl text-lightpurple mt-4 font-nerko">Perfil</h1>
        <div>
            <label for="nome">Nome</label>
            <input class="bg-grey rouded-md"
            type="text"
            id="nome"
            >
        </div>
    </sl-tab-panel>

    <sl-tab-panel name="sala de aula"></sl-tab-panel>
    <sl-tab-panel name="configurações"></sl-tab-panel>
    <sl-tab-panel name="ajuda"></sl-tab-panel>
  </sl-tab-group>   
</div>



{% endblock %}