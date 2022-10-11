{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-start md:items-center justify-center p-4">

    <main class="flex flex-wrap space-y-2 gap-4 rounded-md items-start justify-center bg-white px-8 py-8 shadow-lg w-full max-w-[900px] min-h-[350px]" data-aos="fade-up" data-aos-mirror="true"
    data-aos-once="true" data-aos-duration="800">

        <form class="flex flex-col flex-1 items-center justify-between w-full min-h-[350px]" method="post" action="{{BASE}}@signup-class">
            
            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="name">Nome da Turma</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="name"
                type="text"
                name="name"
                required
                >
            </div>

            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="teacherclass">Professor da Turma</label>
                <select name="teachers" id="teachers" class="bg-grey rounded-md h-10 w-full" required>
                    <!-- List of Teachers -->
                </select>
            </div>


            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="code">Código da Turma</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="code"
                type="text"
                name="code"
                required
                >
            </div>

            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="confirmcode">Confirmar código da turma</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="confirmcode"
                type="text"
                name="confirmcode"
                >
            </div>
    
    
            <button class="bg-orange rounded-md h-10 w-48 text-white flex items-center justify-center group mt-4" type="submit">
                <span class="pl-2">Criar Turma</span>
            </button>

        </form>

        <!-- DIVIDER -->
        <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
        </div>

        <div class="flex w-full h-full min-h-[350px] max-w-[400px]  items-center justify-stretch gap-2 flex-1 flex-col">

            <div id="classes" class="max-h-[320px] overflow-y-auto w-full h-full min-h-[350px] flex-1 flex flex-col items-center justify-center gap-8">
                <img class="w-full h-full max-w-[100px] max-h-[100px]" src="{{BASE}}/svgs/spinner.svg" alt="loading spinner"/>
            </div>

        </div>

    </main>  
    
</div>

<script defer>

     // TEACHERS AJAX REQUEST
     $.ajax({
        url: "@teachers",
        method: 'GET',
        data:"typelist=2"
    }).done((response)=>{

        document.querySelector("#teachers").innerHTML = response;
        
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


</script>


{% endblock %}