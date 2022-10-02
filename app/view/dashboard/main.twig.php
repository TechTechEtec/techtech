{% extends "partials/body.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block body %}

<h1>Dashboard</h1>

<!-- Showing Result of FetchAll -->
<ul>
    {% if students != null %}
        {% for student in students %}
            <li>{{loop.index}} - {{student.name}}</li>
        {% endfor %}
    {% endif %}
</ul>

<!-- Showing Result of FetchById -->
{% if student != null %}
    <p>{{student[0].name}}</p>
{% endif %}

{% endblock %}