{% extends "partials/body.twig.php" %}

{% block title %} Dashboard | Techtech {% endblock %}

{% block body %}

<h1 class="text-4xl font-bold font-clean text-purple uppercase mb-8">Dashboard</h1>

<div class="flex flex-row flex-wrap w-full h-auto gap-4 items-start justify-start">

    <!-- STUDENTS -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Estudantes:</h2>
        <div id="students" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

    <!-- STUDENT -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Estudante pego pelo ID:</h2>
        <div id="student" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

    <!-- TEACHERS -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Professores:</h2>
        <div id="teachers" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

    <!-- TEACHER -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Professor pego pelo ID:</h2>
        <div id="teacher" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

    <!-- SCHOOLS -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Escolas:</h2>
        <div id="schools" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

    <!-- SCHOOL -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Escola pego pelo ID:</h2>
        <div id="school" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

     <!-- CLASSES -->
     <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Turmas:</h2>
        <div id="classes" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>

    <!-- CLASS -->
    <div>
        <h2 class="text-2xl font-bold font-clean text-darkpurple uppercase">Turma pega pelo ID:</h2>
        <div id="class" class="tex-center w-full">
            <img class="w-[60px] h-[60px]" src="{{BASE}}/svgs/spinner.svg" alt="loading image"/>
        </div>
    </div>
</div>

<script>

    // STUDENTS AJAX REQUEST
    $.ajax({
        url: "@students",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#students").innerHTML = response;
   
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
        document.querySelector("#student").innerHTML = response;
    }).fail((response)=>{
        console.log("Error:", response);
    })

     // TEACHERS AJAX REQUEST
     $.ajax({
        url: "@teachers",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#teachers").innerHTML = response;
   
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
        document.querySelector("#teacher").innerHTML = response;
    }).fail((response)=>{
        console.log("Error:", response);
    })

     // SCHOOLS AJAX REQUEST
     $.ajax({
        url: "@schools",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#schools").innerHTML = response;
   
    }).fail((response)=>{
        console.log("Error:", response);
    })

    // SCHOOL BY ID AJAX REQUEST
    $.ajax({
        url: "@school",
        type: 'GET',
        data:  "id=df0b62f7-5367-4b6a-98f2-8686410151fe",
        dataType: 'html'
    }).done((response)=>{
        document.querySelector("#school").innerHTML = response;
    }).fail((response)=>{
        console.log("Error:", response);
    })

     // CLASSES AJAX REQUEST
     $.ajax({
        url: "@classes",
        method: 'GET',
    }).done((response)=>{
        document.querySelector("#classes").innerHTML = response;
   
    }).fail((response)=>{
        console.log("Error:", response);
    })

    // CLASS BY ID AJAX REQUEST
    $.ajax({
        url: "@class",
        type: 'GET',
        data:  "id=7dde9497-702a-414e-80bc-a05fdb1b8948",
        dataType: 'html'
    }).done((response)=>{
        document.querySelector("#class").innerHTML = response;
    }).fail((response)=>{
        console.log("Error:", response);
    })

</script>

{% endblock %}