{% extends "partials/body.twig.php" %}

{% block title %} Criar Turmas | Techtech {% endblock %}

{% block body %}

    <div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple relative overflow-x-hidden flex flex-col items-center justify-center">
    
             <h1 class="flex flex-col  text-4xl justify-center items-center mt-[-30rem] md:mt-[-5rem] lg:mt-[-5rem] flex flex-col md:text-3xl lg:text-3xl font-bold text-lightpurple leading-eloose">Cadastre seus Professores</h1>
           
        
     <div class="text-lg flex flex-col grid-cols-2 md:flex-row lg:flex-row space-y-2 grid-cols absolute inset-x-0 bottom-0 md:static lg:static md:inset-0 lg:inset-0 rounded-md items-center bg-white h-[40rem] md:h-[25rem] lg:h-[25rem]  px-8 py-12 shadow-lg" data-aos="fade-up" data-aos-mirror="true" data-aos-once="true" data-aos-duration="800">
    
         <form class="flex flex-col flex-1 items-center justify-center w-full min-h-[350px]" method="post" action="{{BASE}}@signup-class">
            
            <label for="nome" class="font-bold">Nome</label>
            <input class="bg-white border-1 border-grey h-8 w-full md:w-full lg:w-full focus:border-b-2" id="nome" type="text" required>

            <label for="email" class="mt-8 font-bold items-start">E-mail Institucional</label>
            <input class="bg-white border-1 border-grey h-8 w-full md:w-full lg:w-full focus:border-b-2" id="email" type="email" required>


         <button class="bg-orange rounded-md h-10 w-48 text-white flex items-center justify-center group mt-4" type="submit">
             <span class="pl-2">Cadastrar</span>
         </button>
     </form>

        <div id="divider" class="hidden 2sm:block min-h-[350px] w-[2px] bg-grey text-grey drop-shadow-sm rounded-md mx-2 ml-[2rem]"></div>

        </div>
    </div>
{% endblock %}
