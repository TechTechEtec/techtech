{% extends "partials/body.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block body %}

<h1 class="text-4xl font-bold font-clean text-purple uppercase mb-8">Dashboard</h1>

<div class="flex flex-row flex-wrap w-full h-auto gap-4 items-start justify-start">

    <!-- STUDENTS -->
    <div id="students">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Estudantes:</h2>
    </div>

    <!-- STUDENT -->
    <div id="student">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Estudante pego pelo ID:</h2>
    </div>

    <!-- TEACHERS -->
    <div id="teachers">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Professores:</h2>
    </div>

    <!-- TEACHER -->
    <div id="teacher">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Professor pego pelo ID:</h2>
    </div>

    <!-- SCHOOLS -->
    <div id="schools">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Escolas:</h2>
    </div>

    <!-- SCHOOL -->
    <div id="school">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Escola pego pelo ID:</h2>
    </div>

     <!-- CLASSES -->
     <div id="classes">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Turmas:</h2>
    </div>

    <!-- CLASS -->
    <div id="class">
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Turma pega pelo ID:</h2>
    </div>
</div>

<script>

    // STUDENTS AJAX REQUEST
    $.ajax({
        url: "@students",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#students").innerHTML += response;
   
    }).fail((response)=>{
        console.log("Error:", response);
    })

    // STUDENT BY ID AJAX REQUEST
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

     // TEACHERS AJAX REQUEST
     $.ajax({
        url: "@teachers",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#teachers").innerHTML += response;
   
    }).fail((response)=>{
        console.log("Error:", response);
    })

    // TEACHER BY ID AJAX REQUEST
    $.ajax({
        url: "@teacher",
        type: 'GET',
        data:  "id=6c0c2de6-5442-46dd-a5e4-bb67e30621df",
        dataType: 'html'
    }).done((response)=>{
        document.querySelector("#teacher").innerHTML += response;
    }).fail((response)=>{
        console.log("Error:", response);
    })

</script>

{% endblock %}