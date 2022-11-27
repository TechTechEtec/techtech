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
            
            <sl-tab slot="nav" panel="classrooms" class="tab">
                <h1 class="text-3xl font-nerko">Turmas</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="teachers" class="tab">
                <h1 class="text-3xl font-nerko">Professores</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="configurations" class="tab">
                <h1 class="text-3xl font-nerko">Configurações</h1>
            </sl-tab>

            <sl-tab slot="nav" panel="help" class="tab">
                <h1 class="text-3xl font-nerko">Ajuda</h1>
            </sl-tab>


            <sl-tab-panel name="dashboard">
                {% embed "partials/dashboard_school/dashboard.twig.php" %} {% endembed %}
            </sl-tab-panel>

            <sl-tab-panel name="classrooms">
                {% embed "partials/dashboard_school/classrooms.twig.php" %} {% endembed %}
            </sl-tab-panel>

            <sl-tab-panel name="teachers">
                {% embed "partials/dashboard_school/teachers.twig.php" %} {% endembed %}
            </sl-tab-panel>

            <sl-tab-panel name="configurations">  
                {% embed "partials/dashboard_school/configuration.twig.php" %} {% endembed %}
            </sl-tab-panel>

            <sl-tab-panel name="help">
                {% embed "partials/dashboard_school/help.twig.php" %} {% endembed %}
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