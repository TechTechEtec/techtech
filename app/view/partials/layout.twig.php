{% extends "partials/body.twig.php" %}

{% block aditionalStyle%}{% endblock %}

{% block menu %}

    <!-- MENU -->
    {% embed "components/Menu.twig.php" %}{% endembed %}

{% endblock %}


{% block body %}
    <main class="w-[calc(100vw - 3.125rem)] ml-[3.125rem] overflow-x-hidden pl-0 flex flex-col md:flex-row items-stretch justify-stretch gap-[2rem]">

        <!-- USER INFORMATIONS -->
        {% block userInfo %}{% endblock %}

        <!-- MAIN CONTENT -->
        <div class="flex-1 w-full p-[1rem]" >
            {% block main %}

            {% endblock %}   
        </div>
    </main>
{% endblock %}

