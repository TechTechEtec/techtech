{% extends "partials/layout.twig.php" %}

{% block title %} Módulo 04 | Techtech {% endblock %}

{% block main %}

<h1 class="text-4xl font-bold font-clean text-purple uppercase mx-4 my-8">Módulo 04</h1>

<div class="px-6 py-4">
    <?php echo fetch_markdown("https://raw.githubusercontent.com/TechTechEtec/modules/main/01/index.md") ?>
</div>

{% endblock %}
