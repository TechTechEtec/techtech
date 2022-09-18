{% extends "partials/body.twig.php" %}

{% block title %} Login Professor | Techtech {% endblock %}

{% block body %}

<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

    <div class="flex flex-col gap-8 w-full max-w-[800px]">
        <h1 class="text-purple text-5xl font-normal font-bold text-center w-full">Como você quer se cadastrar?</h1>


        <div class="flex flex-col gap-6 items-stretch min-h-[400px] justify-center md:flex-row w-full">

            <div class="flex-1 w-full flex flex-col items-stretch justify-center  p-4 rounded-lg bg-white ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
               <ul class="flex flex-col items-stretch justify-center gap-4 ">
               <li><a href="#"><div class="w-full max-w-[300px] mx-auto p-4 bg-purple text-center text-white rounded-md pointer-events-auto hover:transform-y-[-3px]">Estudos Próprios</div></a></li>
               <li><a href="#"><div class="w-full max-w-[300px] mx-auto p-4 bg-darkerPurple text-center text-white rounded-md pointer-events-auto">Aluno de uma escola</div></a></li>
               <li><a href="#"><div class="w-full max-w-[300px] mx-auto p-4 bg-pink text-center text-white rounded-md pointer-events-auto">Professor</div></a></li>
               </ul>
            </div>

            <div class="flex-1 w-full p-4 rounded-lg bg-white ease-in duration-300 transition-all hover:transform-y-[-3px] drop-shadow-lg">
               <ul class="flex flex-col items-stretch justify-start gap-4">
               <li><a href="#"><div class="w-full max-w-[300px] mx-auto p-4 bg-purple text-center text-white rounded-md pointer-events-auto hover:transform-y-[-3px]">Escola</div></a></li>
              
               </ul>
            </div>

        </div>

    </div>

</div>

{% endblock %}