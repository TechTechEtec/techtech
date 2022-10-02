{% extends "partials/body.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block body %}

<h1 class="text-4xl font-bold font-clean text-purple uppercase">Dashboard</h1>

<div id="students">
    <h2>Estudantes:</h2>
</div>

<div id="student">
    <h2>Estudante pego pelo ID:</h2>
</div>

<script>

    $.ajax({
        url: "@students",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#students").innerHTML += response;
   
    }).fail((response)=>{
        console.log("Error:", response);
    })

    $.ajax({
        url: "@student",
        type: 'GET',
        data:  "id=b61b0e86-6783-45bf-856a-b7a6f9e2ce8b",
        dataType: 'html'
    }).done((response)=>{
        document.querySelector("#student").innerHTML += response;
    }).fail((response)=>{
        console.log("Error:", response);
    })

</script>

{% endblock %}