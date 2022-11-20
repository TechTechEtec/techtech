{% extends "partials/body.twig.php" %}

{% block aditionalStyle%}{% endblock %}

{% block menu %}

    <!-- MENU -->
    {% embed "components/Menu.twig.php" %}{% endembed %}

{% endblock %}


{% block body %}
    <main class="w-[calc(100vw - 50px)] ml-[50px] overflow-x-hidden pl-0 flex flex-col md:flex-row items-stretch justify-stretch gap-[2rem]">

        <!-- USER INFORMATIONS -->
        {% block userInfo %}{% endblock %}

        <!-- MAIN CONTENT -->
        <div class="flex-1 w-full p-4" >
            {% block main %}

            {% endblock %}   
        </div>
    </main>
{% endblock %}

