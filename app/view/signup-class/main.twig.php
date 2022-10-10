{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-row items-center justify-center">

    <main class="flex flex-wrap space-y-2 gap-4 rounded-md items-start justify-center bg-white px-8 py-8 shadow-lg w-full max-w-[700px] min-h-[350px]">

        <form class="flex flex-col flex-1 items-center justify-between w-full min-h-[350px]">
            
            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="password">Nome da Turma</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="password"
                type="password"
                name="password"
                >
            </div>

            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="teacherclass">Professor da Turma</label>
                <select name="teachers" id="teachers" class="bg-grey rounded-md h-10 w-full">
                    <!-- List of Teachers -->
                </select>
            </div>


            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="password">Senha da Turma</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="password"
                type="password"
                name="password"
                >
            </div>

            <div class="mt-2 font-bold flex flex-col w-full">
                <label for="confirmpassword">Confirmar senha da turma</label>
                <input class="bg-grey rounded-md h-10 w-full"
                id="confirmpassword"
                type="password"
                name="confirmpassword"
                >
            </div>
    
    
            <button class="bg-orange rounded-md h-10 w-48 text-white flex items-center justify-center group mt-4" type="submit">
                <span class="pl-2">Criar Turma</span>
            </button>

        </form>

        <!-- DIVIDER -->
        <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
        </div>

        <div class="flex w-full h-full min-h-[350px]  items-center justify-around gap-2 flex-1 flex-col">

            <div id="classes" class="max-h-280px overflow-y-auto w-full h-full min-h-[350px] flex flex-col items-center justify-center gap-8">
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