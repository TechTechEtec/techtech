{% extends "partials/layout.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block userInfo %} 
    {% embed "components/userInformation.twig.php" %}{% endembed %}
{% endblock %}

{% block main %}
    <div class="md:ml-[17.5rem]">
        <sl-tab-group>

            <sl-tab slot="nav"panel="dashboard">
                <h1 class="text-3xl font-nerko">Painel</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="configurations">
                <h1 class="text-3xl font-nerko">Configurações</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="help">
                <h1 class="text-3xl font-nerko">Ajuda</h1>
            </sl-tab>
                
            <sl-tab-panel name="dashboard">
                {% embed "partials/dashboard_teacher/dashboard.twig.php" %} {% endembed %}
            </sl-tab-panel>

            <sl-tab-panel name="configurations">
                {% embed "partials/dashboard_teacher/configuration.twig.php" %} {% endembed %}
            </sl-tab-panel>

            <sl-tab-panel name="help">
                {% embed "partials/dashboard_teacher/help.twig.php" %} {% endembed %}
            </sl-tab-panel>

        </sl-tab-group>   
    </div>
{% endblock %}